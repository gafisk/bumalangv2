<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class adminPengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penguruses = Pengurus::with('divisi')->get();
        return view('admin.profil.daftar-pengurus', compact('penguruses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $divisis = Divisi::all();
        return view('admin.profil.tambah-pengurus', compact('divisis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_divisi' => 'required|exists:divisis,id',
            'jabatan' => 'required',
            'nama_pengurus' => 'required|string|max:255',
            'asal_univ' => 'required|string|max:255',
            'instagram' => 'required|url',
            'linkedin' => 'required|url',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Proses upload file dengan nama timestamp
        $file = $request->file('foto');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('foto_pengurus', $filename, 'public');

        // Simpan ke database
        Pengurus::create([
            'id_divisi' => $request->nama_divisi,
            'jabatan' => $request->jabatan,
            'nama_pengurus' => $request->nama_pengurus,
            'univ_pengurus' => $request->asal_univ,
            'link_instagram' => $request->instagram,
            'link_linkedin' => $request->linkedin,
            'foto' => $filename, // Simpan hanya nama file di database
        ]);

        return redirect()->route('admin.daftar-pengurus')->with('success', 'Data Pengurus berhasil ditambahkan!');
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
        $pengurus = Pengurus::findOrFail($id);
        $divisis = Divisi::all();
        return view('admin.profil.edit-pengurus', compact('pengurus', 'divisis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_divisi' => 'required|exists:divisis,id',
            'jabatan' => 'required',
            'nama_pengurus' => 'required|string|max:255',
            'asal_univ' => 'required|string|max:255',
            'instagram' => 'required|url',
            'linkedin' => 'required|url',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $pengurus = Pengurus::findOrFail($id);
        $pengurus->id_divisi = $request->nama_divisi;
        $pengurus->jabatan = $request->jabatan;
        $pengurus->nama_pengurus = $request->nama_pengurus;
        $pengurus->univ_pengurus = $request->asal_univ;
        $pengurus->link_instagram = $request->instagram;
        $pengurus->link_linkedin = $request->linkedin;

        if ($request->hasFile('foto')) {
            // Hapus gambar lama jika ada
            if ($pengurus->foto && Storage::exists('public/foto_pengurus/' . $pengurus->foto)) {
                Storage::delete('public/foto_pengurus/' . $pengurus->foto);
            }

            // Simpan gambar baru dengan nama timestamp
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/foto_pengurus', $filename);
            $pengurus->foto = $filename;
        }

        $pengurus->save();

        return redirect()->route('admin.daftar-pengurus')->with('success', 'Data Pengurus berhasil diperbarui!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pengurus = Pengurus::findOrFail($id);

        // Hapus gambar dari storage jika ada
        if ($pengurus->foto && Storage::exists('public/foto_pengurus/' . $pengurus->foto)) {
            Storage::delete('public/foto_pengurus/' . $pengurus->foto);
        }

        $pengurus->delete();

        return redirect()->route('admin.daftar-pengurus')->with('success', 'Data Pengurus berhasil dihapus!');
    }
}
