<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class adminDivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisis = Divisi::all();
        return view('admin.manweb.daftar-divisi', compact('divisis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.manweb.tambah-divisi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_divisi' => 'required|string'
        ]);

        // Simpan ke Database
        Divisi::create([
            'nama_divisi' => $request->nama_divisi
        ]);

        return redirect()->route('admin.daftar-divisi')->with('success', 'Data Divisi berhasil ditambahkan!');
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
        $divisi = Divisi::findOrFail($id);
        return view('admin.manweb.edit-divisi', compact('divisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_divisi' => 'required|string'
        ]);

        $divisi = Divisi::findOrFail($id);
        $divisi->nama_divisi = $request->nama_divisi;

        $divisi->save();
        return redirect()->route('admin.daftar-divisi')->with('success', 'Data Divisi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $divisi = Divisi::findOrFail($id);

        $divisi->delete();

        return redirect()->route('admin.daftar-divisi')->with('success', 'Data Divisi berhasil dihapus!');
    }
}
