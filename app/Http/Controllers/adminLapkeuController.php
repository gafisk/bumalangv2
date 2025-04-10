<?php

namespace App\Http\Controllers;

use App\Models\Lapkeu;
use Illuminate\Http\Request;

class adminLapkeuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lapkeus = Lapkeu::all();
        return view('admin.profil.daftar-lapkeu', compact('lapkeus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.profil.tambah-lapkeu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'nama_kabinet.required' => 'Nama Kabinet tidak boleh kosong',
            'tahun.required' => 'Tahun Kabinet tidak boleh kosong',
            'link.required' => 'Link Google Drive tidak boleh kosong',

            'tahun.numeric' => 'Tahun Kabinet harus berisi tahun dan harus angka',

            'link.url' => 'Link Google Drive harus berupa link'
        ];

        $request->validate([
            'nama_kabinet' => 'required',
            'tahun' => 'required|numeric',
            'link' => 'required|url'
        ], $messages);

        Lapkeu::create([
            'nama_kabinet' => $request->nama_kabinet,
            'tahun' => $request->tahun,
            'link' => $request->link
        ]);

        return redirect()->route('admin.daftar-lapkeu')->with('success', 'Data Laporan Keuangan berhasil ditambahkan!');
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
        $lapkeu = Lapkeu::findOrFail($id);
        return view('admin.profil.edit-lapkeu', compact('lapkeu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'nama_kabinet.required' => 'Nama Kabinet tidak boleh kosong',
            'tahun.required' => 'Tahun Kabinet tidak boleh kosong',
            'link.required' => 'Link Google Drive tidak boleh kosong',

            'tahun.numeric' => 'Tahun Kabinet harus berisi tahun dan harus angka',

            'link.url' => 'Link Google Drive harus berupa link'
        ];

        $request->validate([
            'nama_kabinet' => 'required',
            'tahun' => 'required|numeric',
            'link' => 'required|url'
        ], $messages);

        $lapkeu = Lapkeu::findOrFail($id);
        $lapkeu->nama_kabinet = $request->nama_kabinet;
        $lapkeu->tahun = $request->tahun;
        $lapkeu->link = $request->link;

        $lapkeu->save();

        return redirect()->route('admin.daftar-lapkeu')->with('success', 'Data Laporan Keuangan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lapkeu = Lapkeu::findOrFail($id);

        $lapkeu->delete();

        return redirect()->route('admin.daftar-lapkeu')->with('success', 'Data Laporan Keuangan berhasil dihapus!');
    }
}
