<?php

namespace App\Http\Controllers;

use App\Models\Trash;
use App\Http\Requests\StoreTrashRequest;
use App\Http\Requests\UpdateTrashRequest;
use App\Models\jenisTrash;
use App\Models\Konter;

class TrashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenistrashes = JenisTrash::all();
        $trashes = Trash::join('jenis_trashes', 'trashes.idJenisTrash', '=', 'jenis_trashes.idJenisTrash')
                        ->select(['trashes.*','jenis_trashes.*'])->get();
        return view('admin.trash.content',['trashes'=>$trashes,'jenistrashes'=>$jenistrashes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenistrashes = JenisTrash::all();
        $trashes = Trash::join('jenis_trashes', 'trashes.idJenisTrash', '=', 'jenis_trashes.idJenisTrash')
                        ->select(['trashes.*','jenis_trashes.*']);
        return view('admin.trash.add',['trashes'=>$trashes,'jenistrashes'=>$jenistrashes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTrashRequest $request)
    {
        $data = $request->validate([
            'trashcode' => 'required',
            'locate' => 'required',
        ]);

        $idJenisTrash = $request->idJenisTrash;
        
        Trash::create([
            'idTrash' => $data['trashcode'],
            'idJenisTrash' => $idJenisTrash,
            'lokasiTrash' => $data['locate'],
        ]);

        return redirect('admin/infotrash');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trash $trash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trash $idTrash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrashRequest $request, $idTrash)
    {
        $trash = Trash::findOrFail($idTrash);
        $trash->statusTrash = ($trash->statusTrash == 'Aktif') ? 'Maintenance' : 'Aktif';
        $trash->save();
        return redirect('admin/infotrash');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idTrash)
    {
        Trash::where('idTrash','=',$idTrash)->delete();
        return redirect('admin/infotrash');
    }

    public function deleteall()
    {
        Trash::truncate();
        return redirect('admin/infotrash');
    }
}
