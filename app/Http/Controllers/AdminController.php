<?php

namespace App\Http\Controllers;

use App\Models\Konter;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.home');
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
        //
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

    public function katalogstok()
    {
        $konters = Konter::all();
        return view('admin.katalog.stok',['konters'=>$konters]);
    }

    public function klaim()
    {
        return view('admin/klaim/content');
    }

    public function buang()
    {
        return view('admin/buang/content');
    }

    public function profile()
    {
        $penggunas = Pengguna::all();
        return view('admin/profile/content',['penggunas'=>$penggunas]);
    }

    public function destroyUser($idpengguna)
    {
        Pengguna::where('idpengguna','=',$idpengguna)->delete();
        return redirect('admin/profileuser');
    }

}
