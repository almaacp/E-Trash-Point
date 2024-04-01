<?php

namespace App\Http\Controllers;

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

    public function trash()
    {
        return view('admin/trash/content');
    }

    public function trashadd()
    {
        return view('admin/trash/add');
    }

    public function trashupdate()
    {
        return view('admin/trash/update');
    }

    public function katalog()
    {
        return view('admin/katalog/content');
    }

    public function katalogadd()
    {
        return view('admin/katalog/add');
    }

    public function katalogupdate()
    {
        return view('admin/katalog/update');
    }

    public function konter()
    {
        return view('admin/konter/content');
    }

    public function konteradd()
    {
        return view('admin/konter/add');
    }

    public function konterupdate()
    {
        return view('admin/konter/update');
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
        return view('admin/profile/content');
    }

    public function posttrashadd(Request $request)
    {
        $data = $request->validate([
            'trashcode' => 'required',
            'locate' => 'required',
            'trashtype' => 'required',
        ]);
        return view('admin/trash/content');
    }

    public function posttrashupdate(Request $request)
    {
        $data = $request->validate([
            'locate' => 'required',
            'trashtype' => 'required',
            'trashstatus' => 'required',
        ]);
        return view('admin/trash/content');
    }
    
    public function postkatalogadd(Request $request)
    {
        $data = $request->validate([
            'giftname' => 'required',
            'giftpoint' => 'required',
            'stock' => 'required',
            'giftimage' => 'required',
        ]);
        return view('admin/katalog/content');
    }

    public function postkatalogupdate(Request $request)
    {
        $data = $request->validate([
            'giftname' => 'required',
            'giftpoint' => 'required',
            'stock' => 'required',
            'giftimage' => 'required',
        ]);
        return view('admin/katalog/content');
    }

    public function postkonteradd(Request $request)
    {
        $data = $request->validate([
            'locate' => 'required',
        ]);
        return view('admin/konter/content');
    }

    public function postkonterupdate(Request $request)
    {
        $data = $request->validate([
            'locate' => 'required',
        ]);
        return view('admin/konter/content');
    }

}
