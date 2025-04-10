<?php

namespace App\Http\Controllers;

use App\Models\Proker;
use Illuminate\Http\Request;

class adminProkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prokers = Proker::all();

        return view('admin.profil.daftar-proker', compact('prokers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.profil.tambah-proker');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $massages = [
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
        ], $massages);

        Proker::create([
            'nama_kabinet' => $request->nama_kabinet,
            'tahun' => $request->tahun,
            'link' => $request->link
        ]);


        return redirect()->route('admin.daftar-proker')->with('success', 'Data Proker berhasil ditambahkan!');
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
        $proker = Proker::findOrFail($id);
        return view('admin.profil.edit-proker', compact('proker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $massages = [
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
        ], $massages);

        $proker = Proker::findOrFail($id);
        $proker->nama_kabinet = $request->nama_kabinet;
        $proker->tahun = $request->tahun;
        $proker->link = $request->link;

        $proker->save();

        return redirect()->route('admin.daftar-proker')->with('success', 'Data Proker berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $proker = Proker::findOrFail($id);

        $proker->delete();

        return redirect()->route('admin.daftar-proker')->with('success', 'Data Proker berhasil dihapus!');
    }
}
