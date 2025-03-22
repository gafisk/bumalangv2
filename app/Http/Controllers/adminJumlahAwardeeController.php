<?php

namespace App\Http\Controllers;

use App\Models\JumlahAwardee;
use Illuminate\Http\Request;

class adminJumlahAwardeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlahawardees = JumlahAwardee::all();

        return view('admin.manweb.daftar-jumlahawardee', compact('jumlahawardees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.manweb.tambah-jumlahawardee');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori_awardee' => 'required',
            'total_awardee' => 'required|numeric'
        ]);

        JumlahAwardee::create([
            'kategori_awardee' => $request->kategori_awardee,
            'total_awardee' => $request->total_awardee
        ]);

        return redirect()->route('admin.daftar-jumlahawardee')->with('success', 'Data Jumlah Awardee berhasil ditambahkan!');
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
        $jumlahawardee = JumlahAwardee::findOrFail($id);
        return view('admin.manweb.edit-jumlahawardee', compact('jumlahawardee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kategori_awardee' => 'required',
            'total_awardee' => 'required|numeric'
        ]);

        $jumlahawardee = JumlahAwardee::findOrFail($id);
        $jumlahawardee->total_awardee = $request->total_awardee;

        $jumlahawardee->save();

        return redirect()->route('admin.daftar-jumlahawardee')->with('success', 'Data Jumlah Awardee berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jumlahawardee = JumlahAwardee::findOrFail($id);

        $jumlahawardee->delete();

        return redirect()->route('admin.daftar-jumlahawardee')->with('success', 'Data Jumlah Awardee berhasil dihapus!');
    }
}
