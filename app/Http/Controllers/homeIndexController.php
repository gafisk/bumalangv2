<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\JumlahAwardee;
use App\Models\Universitas;
use Illuminate\Http\Request;

class homeIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_organisasi = Footer::first();
        $data_universitas = Universitas::all();
        $data_jumlahawardee = JumlahAwardee::all();

        $jumlah_univ = $data_universitas->count();
        return view('home.index', compact('data_organisasi', 'data_universitas', 'jumlah_univ', 'data_jumlahawardee'));
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
