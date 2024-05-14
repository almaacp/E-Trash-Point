<?php

namespace App\Http\Controllers;

use App\Models\Konter;
use App\Http\Requests\StoreKonterRequest;
use App\Http\Requests\UpdateKonterRequest;

class KonterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konters = Konter::all();
        return view('admin.konter.content',['konters'=>$konters]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $konters = Konter::all();
        return view('admin.konter.add',['konters'=>$konters]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKonterRequest $request)
    {
        $data = $request->validate([
            'locate' => 'required',
        ]);

        Konter::create([
            'lokasiKonter' => $data['locate'],
        ]);

        return redirect('admin/konter');
    }

    /**
     * Display the specified resource.
     */
    public function show(Konter $konter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Konter $idKonter)
    {
        $konters = Konter::find($idKonter);
        return view('admin.konter.update',['konters'=>$konters]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKonterRequest $request, Konter $idKonter)
    {
        $data = $request->validate([
            'locate' => 'required',
        ]);

        $idKonter->update([
            'lokasiKonter' => $data['locate'],
        ]);

        return redirect('admin/konter');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idKonter)
    {
        Konter::where('idKonter','=',$idKonter)->delete();
        return redirect('admin/konter');
    }

    public function deleteall()
    {
        Konter::truncate();
        return redirect('admin/konter');
    }
}
