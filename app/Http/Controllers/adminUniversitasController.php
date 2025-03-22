<?php

namespace App\Http\Controllers;

use App\Models\Universitas;
use Illuminate\Http\Request;

class adminUniversitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universitases = Universitas::all();
        return view('admin.manweb.daftar-univ', compact('universitases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.manweb.tambah-univ');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_univ' => 'required|string|max:255',
            'foto_univ' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $file = $request->file('foto_univ');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('foto_universitas', $filename, 'public');

        Universitas::create([
            'nama_universitas' => $request->nama_univ,
            'foto' => $filename,
        ]);

        return redirect()->route('admin.daftar-universitas')->with('success', 'Data Universitas berhasil ditambahkan!');
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
        $univ = Universitas::findOrFail($id);
        return view('admin.manweb.edit-univ', compact('univ'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_univ' => 'required|string|max:255',
            'foto_univ' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $univ = Universitas::findOrFail($id);
        $univ->nama_universitas = $request->nama_univ;

        if ($request->hasFile('foto_univ')) {
            // Hapus gambar lama dengan unlink
            $oldImagePath = public_path('storage/foto_universitas/' . $univ->foto);
            if ($univ->foto && file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            // Simpan gambar baru dengan nama timestamp
            $file = $request->file('foto_univ');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage/foto_universitas'), $filename);
            $univ->foto = $filename;
        }

        $univ->save();

        return redirect()->route('admin.daftar-universitas')->with('success', 'Data Universitas berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $univ = Universitas::findOrFail($id);

        $imagePath = public_path('storage/foto_universitas/' . $univ->foto);
        if ($univ->foto && file_exists($imagePath)) {
            unlink($imagePath);
        }

        $univ->delete();

        return redirect()->route('admin.daftar-universitas')->with('success', 'Data Universitas berhasil dihapus!');
    }
}
