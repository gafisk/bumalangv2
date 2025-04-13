<?php

namespace App\Http\Controllers;

use App\Models\Pengelola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class adminPenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.login');
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
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);


        // Mencari Pengelola berdasarkan username
        $pengelola = Pengelola::where('username', $request->username)->first();

        // Cek apakah pengguna ditemukan dan password cocok
        if ($pengelola && password_verify($request->password, $pengelola->password)) {
            // Sukses login: Set session dengan ID dan role pengguna
            Session::put('pengelola_id', $pengelola->id);
            Session::put('role', $pengelola->role);

            return redirect()->route('admin.dashboard');
        }

        // Gagal login
        return back()->withErrors([
            'username' => 'Username salah.',
            'password' => 'Password Salah.'
        ]);
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
}
