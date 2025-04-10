<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Lapkeu;
use Illuminate\Http\Request;

class homeLapkeuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_organisasi = Footer::first();

        $lapkeus = Lapkeu::orderBy('tahun', 'desc')
            ->paginate(4);

        return view('home.profil.lapkeu', compact('data_organisasi', 'lapkeus'));
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
        $data_organisasi = Footer::first();

        $lapkeu = Lapkeu::findOrFail($id);

        return view('home.profil.page-lapkeu', compact('data_organisasi', 'lapkeu'));
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
