<?php

namespace App\Http\Controllers;

use App\Models\Trash;
use App\Models\Pengguna;
use App\Models\JenisTrash;
use App\Models\DetailTrash;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoredetailTrashRequest;
use App\Http\Requests\UpdatedetailTrashRequest;
use Illuminate\Support\Facades\Auth;

class DetailTrashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detailtrashes = DetailTrash::all();
        $trashes = Trash::join('detail_trashes', 'trashes.idTrash', '=', 'detail_trashes.idTrash')
                        ->select(['trashes.*', 'detail_trashes.*'])
                        ->get();
        $penggunas = DB::table('penggunas')
                        ->join('detail_trashes', 'penggunas.idpengguna', '=', 'detail_trashes.idPengguna')
                        ->select(['penggunas.*', 'detail_trashes.*'])
                        ->get();
        return view('historibuang',[
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

        // Dapatkan trash dan jenis_trash terkait
        $trash = Trash::join('jenis_trashes', 'trashes.idJenisTrash', '=', 'jenis_trashes.idJenisTrash')
        ->where('trashes.idTrash', $data['trashcode'])
        ->select('trashes.*', 'jenis_trashes.poinTrash')
        ->first();

        if (!$trash) {
            return back()->withErrors(['trashcode' => 'Kode trash tidak valid.']);
        }

        // Perhitungan jumlah poin menggunakan $trash->poinTrash bukan $trashes->poinTrash
        $jumlahPoin = $data['trashAmount'] * $trash->poinTrash;

        // Dapatkan ID pengguna yang sedang login
        $idPengguna = $request->idPengguna;

        // Buat entri baru di detail_trashes
        DetailTrash::create([
            'idPengguna' => $idPengguna, // Tambahkan ID pengguna
            'idTrash' => $data['trashcode'],
            'tglPembuangan' => now(),
            'jumlahPoin' => $jumlahPoin,
        ]);

        return redirect('user/historibuang');
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
    public function update(UpdatedetailTrashRequest $request, detailTrash $detailTrash)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(detailTrash $detailTrash)
    {
        //
    }
}