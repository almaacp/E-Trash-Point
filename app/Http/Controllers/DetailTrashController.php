<?php

namespace App\Http\Controllers;

use App\Models\Trash;
use App\Models\Pengguna;
use App\Models\JenisTrash;
use App\Models\DetailTrash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoredetailTrashRequest;
use App\Http\Requests\UpdatedetailTrashRequest;

class DetailTrashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detailtrashes = DetailTrash::all();
        $trashes = Trash::all();
        $penggunas = Pengguna::all();
        return view('historibuang',[
            'detailtrashes' => $detailtrashes,
            'trashes' => $trashes,
            'penggunas' => $penggunas
        ]);
    }

    public function adminBuang()
    {
        $detailtrashes = DetailTrash::all();
        $trashes = Trash::all();
        $penggunas = Pengguna::all();
        return view('admin/buang/content',[
            'detailtrashes' => $detailtrashes,
            'trashes' => $trashes,
            'penggunas' => $penggunas
        ]);
    }

    public function buangsampah()
    {
        $jenistrashes = JenisTrash::all();
        $trashes = Trash::join('jenis_trashes', 'trashes.idJenisTrash', '=', 'jenis_trashes.idJenisTrash')
                        ->select(['trashes.*','jenis_trashes.*'])->get();
        return view('buang',['trashes'=>$trashes,'jenistrashes'=>$jenistrashes]);
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
    public function store(StoredetailTrashRequest $request)
    {
        $data = $request->validate([
            'trashcode' => 'required',
            'trashAmount' => 'required|numeric|min:0',
        ]);
    
        $trash = Trash::join('jenis_trashes', 'trashes.idJenisTrash', '=', 'jenis_trashes.idJenisTrash')
            ->where('trashes.idTrash', $data['trashcode'])
            ->select('trashes.*', 'jenis_trashes.poinTrash')
            ->first();
    
        $jumlahPoin = $data['trashAmount'] * $trash->poinTrash;
    
        $idpengguna = Auth::id();
    
        DetailTrash::create([
            'idpengguna' => $idpengguna,
            'idTrash' => $data['trashcode'],
            'tglPembuangan' => now(),
            'jumlahPoin' => $jumlahPoin,
            'statusPoin' => 'Belum Diverifikasi',
        ]);

        $pengguna = Pengguna::findOrFail($idpengguna);
        $pengguna->poinpengguna += $jumlahPoin;
        $pengguna->save();

        return redirect('/user/historibuangsampah');
    }    

    /**
     * Display the specified resource.
     */
    public function show(detailTrash $detailTrash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(detailTrash $detailTrash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedetailTrashRequest $request)
    {
        $idpengguna = intval($request->input('idpengguna'));
        $idTrash = $request->input('idTrash');

        // Mencari baris yang sesuai dengan idPengguna dan idTrash
        $detailtrash = DetailTrash::where('idPengguna', $idpengguna)
                        ->where('idTrash', $idTrash)->first();
    
        // Jika data ditemukan, ubah statusPoin-nya
        $detailtrash->statusPoin = ($detailtrash->statusPoin == 'Belum Diverifikasi') ? 'Terverifikasi' : 'Belum Diverifikasi';
        $detailtrash->save();
        
        // Mengarahkan ulang ke halaman historibuangsampah
        return redirect('admin/historibuangsampah');
    }    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(detailTrash $detailTrash)
    {
        //
    }
}