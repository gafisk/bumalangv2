<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class adminBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = Berita::all();
        return view('admin.berita.daftar-berita', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.tambah-berita');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto_berita' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul_berita' => 'required|string|max:255',
            'isi_berita' => 'required',
        ]);

        if ($request->hasFile('foto_berita')) {
            $file = $request->file('foto_berita');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('foto_berita', $filename, 'public');
        } else {
            $filename = "";
        }
        // Simpan ke Database
        Berita::create([
            'foto' => $filename,
            'judul_berita' => $request->judul_berita,
            'isi_berita' => $request->isi_berita,
            'status' => 'draft'
        ]);

        return redirect()->route('admin.daftar-berita')->with('success', 'Data Berita berhasil ditambahkan!');
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
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit-berita', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'foto_berita' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul_berita' => 'required|string|max:255',
            'isi_berita' => 'required',
        ]);

        $berita = Berita::findOrFail($id);
        $berita->judul_berita = $request->judul_berita;
        $berita->isi_berita = $request->isi_berita;

        if ($request->hasFile('foto_berita')) {
            $oldImagePath = public_path('storage/foto_berita/' . $berita->foto);
            if ($berita->foto && file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            // Simpan Gambar Baru
            $file = $request->file('foto_berita');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage/foto_berita'), $filename);
            $berita->foto = $filename;
        }

        $berita->save();

        return redirect()->route('admin.daftar-berita')->with('success', 'Data Berita berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita = Berita::findOrFail($id);

        $imagePath = public_path('storage/foto_berita/' . $berita->foto);
        if ($berita->foto && file_exists($imagePath)) {
            unlink($imagePath);
        }

        $berita->delete();

        return redirect()->route('admin.daftar-berita')->with('success', 'Data Berita berhasil dihapus!');
    }

    public function publish(string $id)
    {
        $berita = Berita::findOrFail($id);
        $berita->status = 'publish';
        $berita->save();

        return redirect()->route('admin.daftar-berita')->with('success', 'Berita berhasil dipublish!');
    }

    public function draft(string $id)
    {
        $berita = Berita::findOrFail($id);
        $berita->status = 'draft';
        $berita->save();

        return redirect()->route('admin.daftar-berita')->with('success', 'Berita berhasil di-draftkan!');
    }
}
