<?php

namespace App\Http\Controllers;

use App\Models\hadiah;
use App\Http\Requests\StorehadiahRequest;
use App\Http\Requests\UpdatehadiahRequest;

class HadiahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hadiahs = Hadiah::all();
        return view('admin.katalog.content',['hadiahs'=>$hadiahs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hadiahs = Hadiah::all();
        return view('admin.katalog.add',['hadiahs'=>$hadiahs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorehadiahRequest $request)
    {
        $data = $request->validate([
            'giftname' => 'required',
            'giftpoint' => 'required',
            'giftimage' => 'required',
        ]);

        Hadiah::create([
            'namaHadiah' => $data['giftname'],
            'poinHadiah' => $data['giftpoint'],
            'gambarHadiah' => $data['giftimage'],
        ]);

        return redirect('admin/kataloghadiah');
    }

    /**
     * Display the specified resource.
     */
    public function show(hadiah $hadiah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($idHadiah)
    {
        $hadiahs = Hadiah::find($idHadiah);
        return view('admin.katalog.update',['hadiahs'=>$hadiahs]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatehadiahRequest $request, hadiah $idHadiah)
    {
        if (isset($request->giftimage)) {
            $data = $request->validate([
                'giftname' => 'required',
                'giftpoint' => 'required',
                'giftimage' => 'required',
            ]);

            $idHadiah->update([
                'namaHadiah' => $data['giftname'],
                'poinHadiah' => $data['giftpoint'],
                'gambarHadiah' => $data['giftimage'],
            ]);
        } else {
            $data = $request->validate([
                'giftname' => 'required',
                'giftpoint' => 'required',
            ]);

            $idHadiah->update([
                'namaHadiah' => $data['giftname'],
                'poinHadiah' => $data['giftpoint'],
            ]);
        }

        return redirect('admin/kataloghadiah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idHadiah)
    {
        Hadiah::where('idHadiah','=',$idHadiah)->delete();
        return redirect('admin/kataloghadiah');
    }

    public function deleteall()
    {
        Hadiah::truncate();
        return redirect('admin/kataloghadiah');
    }
}
