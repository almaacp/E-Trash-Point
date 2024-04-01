<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'email' => 'required',
            'username' => 'required',
            'password' => 'required |min:8',
        ]);

        session(['name' => $request->input('name')]);
        session(['username' => $request->input('username')]);
        session(['gender' => $request->input('gender')]);
        session(['address' => $request->input('address')]);
        session(['phonenumber' => $request->input('phonenumber')]);
        session(['email' => $request->input('email')]);

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
        return view('trash');
    }
    
    public function kataloghadiah()
    {
        return view('katalog');
    }

    public function historibuangsampah()
    {
        return view('historibuang');
    }

    public function buangsampah()
    {
        return view('buang');
    }

    public function klaimhadiah()
    {
        return view('klaim');
    }

    public function pilihhadiah()
    {
        return view('pilih');
    }

    public function konter()
    {
        return view('konter');
    }

    public function profile()
    {
        return view('profile');
    }

    public function editprofile()
    {
        return view('editprofile');
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
            'password' => 'required |min:8',
        ]);

        if ($data['username'] === 'admin') {
           return redirect()->action([AdminController::class, 'index']);
        } else {
            return redirect()->action([FrontController::class, 'index']);
        }
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
            'password' => 'required |min:8',
        ]);

        return view('profile');
    }

}
