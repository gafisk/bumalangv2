<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Proker;
use Illuminate\Http\Request;
use PDO;

class homeProkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_organisasi = Footer::first();

        $prokers = Proker::orderBy('tahun', 'desc')
            ->paginate(4);

        return view('home.profil.proker', compact('data_organisasi', 'prokers'));
    }

    public function page($id)
    {
        $data_organisasi = Footer::first();

        $proker = Proker::findOrFail($id);
        return view('home.profil.page-proker', compact('proker', 'data_organisasi'));
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
