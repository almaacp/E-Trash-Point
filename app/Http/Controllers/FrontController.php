<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trash;
use App\Models\hadiah;
use App\Models\Konter;
use App\Models\Voucher;
use App\Models\Pengguna;
use App\Models\jenisTrash;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AdminController;
use App\Http\Requests\StoreVoucherRequest;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phonenumber' => 'required',
            'gender' => 'required',
            'email' => 'required |unique:penggunas,emailpengguna',
            'username' => 'required |unique:penggunas,usernamepengguna',
            'password' => 'required |min:8 |confirmed',
        ]);

        Pengguna::create([
            'namapengguna'=>$data['name'],
            'jkpengguna'=>$data['gender'],
            'alamatpengguna'=>$data['address'],
            'telppengguna'=>$data['phonenumber'],
            'emailpengguna'=>$data['email'],
            'usernamepengguna'=>$data['username'],
            'passwordpengguna'=>Hash::make($data['password']),
        ]);

        return view('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
    public function register()
    {
        return view('register');
    }
    
    public function login()
    {
        return view('login');
    }
    
    public function infotrash()
    {
        $jenistrashes = JenisTrash::all();
        $trashes = Trash::join('jenis_trashes', 'trashes.idJenisTrash', '=', 'jenis_trashes.idJenisTrash')
                        ->select(['trashes.*','jenis_trashes.*'])->get();
        return view('trash',['trashes'=>$trashes,'jenistrashes'=>$jenistrashes]);
    }
    
    public function kataloghadiah()
    {
        $hadiahs = Hadiah::all();
        return view('katalog',['hadiahs'=>$hadiahs]);
    }

    public function stokhadiah($idHadiah)
    {
        $hadiahs = Hadiah::find($idHadiah);
        
        if ($hadiahs) {
            $konters = Konter::all();
            return view('stok',['konters'=>$konters,'hadiahs'=>$hadiahs]);
        }
    }    

    public function buangsampah()
    {
        $jenistrashes = jenisTrash::all();
        $trashes = Trash::join('jenis_trashes', 'trashes.idJenisTrash', '=', 'jenis_trashes.idJenisTrash')
                        ->select(['trashes.*','jenis_trashes.*'])->get();
        return view('buang',['trashes'=>$trashes,'jenistrashes'=>$jenistrashes]);
    }
    
    public function klaimhadiah()
    {
        $vouchers = Voucher::all();
        $penggunas = Pengguna::all();
        $hadiahs = hadiah::all();
        return view('klaim',[
            'vouchers'=>$vouchers,
            'penggunas'=>$penggunas,
            'hadiahs'=>$hadiahs,
        ]);
    }

    public function pilihhadiah()
    {
        $hadiahs = Hadiah::all();
        return view('pilih',['hadiahs'=>$hadiahs]);
    }    

    public function savehadiah(StoreVoucherRequest $request)
    {
        // Validasi input
        $request->validate([
            'idHadiah' => 'required|exists:hadiahs,idHadiah',
        ]);
    
        // Mendapatkan ID pengguna yang saat ini login
        $idpengguna = Auth::id();
    
        // Mendapatkan poin hadiah dari ID hadiah yang dipilih
        $idHadiah = intval($request->input('idHadiah'));
        $hadiah = Hadiah::findOrFail($idHadiah);
        $poinHadiah = $hadiah->poinHadiah;

        // Membuat entri voucher untuk hadiah yang diklaim
        Voucher::create([
            'idpengguna' => $idpengguna,
            'idHadiah' => $idHadiah,
            'tglKlaim' => now(),
        ]);
    
        // Mengurangi poin pengguna sesuai dengan poin hadiah yang dipilih
        $pengguna = Pengguna::findOrFail($idpengguna);
        $pengguna->poinpengguna -= $poinHadiah;
        $pengguna->save();
        
        return redirect('user/klaimhadiah');
    }    

    public function konter()
    {
        $konters = Konter::all();
        return view('konter',['konters'=>$konters]);
    }

    public function profile()
    {
        return view('profile');
    }

    public function editprofile()
    {
        return view('editprofile');
    }

    public function changepassword()
    {
        return view('pass');
    }

    public function voucher()
    {
        return view('voucher');
    }

    public function notif()
    {
        return view('notif');
    }

    public function postlogin(Request $request)
    {
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required|min:8',
        ]);
    
        // Cari pengguna berdasarkan username
        $pengguna = Pengguna::where('usernamepengguna', $data['username'])->first();
        $admin = User::where('username', $data['username'])->first();
    
        if (!$pengguna && !$admin) {
            return back()->with('error', 'Username belum terdaftar');
        }
    
        // Otentikasi sebagai admin jika ditemukan
        if ($admin && Hash::check($data['password'], $admin->password)) {
            Auth::login($admin);
            return redirect()->action([AdminController::class, 'index']);
        }
    
        // Otentikasi sebagai pengguna jika ditemukan
        if ($pengguna && Hash::check($data['password'], $pengguna->passwordpengguna)) {
            Auth::login($pengguna);
            $userData = [
                'idpengguna' => $pengguna->idpengguna,
                'username' => $pengguna->usernamepengguna,
                'name' => $pengguna->namapengguna,
                'gender' => $pengguna->jkpengguna,
                'address' => $pengguna->alamatpengguna,
                'phonenumber' => $pengguna->telppengguna,
                'email' => $pengguna->emailpengguna,
                'poinpengguna' => $pengguna->poinpengguna,
            ];
            session()->put('idpengguna', $userData);
            return redirect('/user');
        }
    
        return back()->with('error', 'Password salah');
    }    
        

    public function logout()
    {
        session()->forget('idpengguna');
        return redirect('/');
    }


    public function closetrash(Request $request)
    {
        $data = $request->validate([
            'trashcode' => 'required |min:7',
        ]);

        return view('historibuang');
    }

    public function postprofile(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phonenumber' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required|min:8',
        ]);

        $pengguna = Pengguna::find($request->session()->get('idpengguna')['idpengguna']);

        if ($pengguna) {
            $pengguna->update([
                'namapengguna' => $data['name'],
                'jkpengguna' => $data['gender'],
                'alamatpengguna' => $data['address'],
                'telppengguna' => $data['phonenumber'],
                'emailpengguna' => $data['email'],
                'usernamepengguna' => $data['username'],
            ]);

            $updatedUserData = [
                'idpengguna' => $pengguna->idpengguna,
                'username' => $pengguna->usernamepengguna,
                'name' => $pengguna->namapengguna,
                'gender' => $pengguna->jkpengguna,
                'address' => $pengguna->alamatpengguna,
                'phonenumber' => $pengguna->telppengguna,
                'email' => $pengguna->emailpengguna,
            ];
            $request->session()->put('idpengguna', $updatedUserData);

            if (Hash::check($data['password'], $pengguna->passwordpengguna)) {               
                return view('profile');
            } else {
                return back()->with('error', 'Password salah');
            }
        }

        return view('profile');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
            'new_password_confirmation' => 'required',
        ]);

        $user = Pengguna::find($request->session()->get('idpengguna')['idpengguna']);

        if (!Hash::check($request->current_password, $user->passwordpengguna)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        $user->update([
            'passwordpengguna' => Hash::make($request->new_password),
        ]);

        return redirect('user/profile/edit');
    }
}