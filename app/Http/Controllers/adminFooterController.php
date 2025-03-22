<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class adminFooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footers = Footer::all();
        return view('admin.manweb.daftar-footer', compact('footers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.manweb.tambah-footer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'youtube' => 'required|url|max:255',
            'instagram' => 'required|url|max:255',
            'linkedin' => 'required|url|max:255',
            'tiktok' => 'required|url|max:255',
            'pengembang' => 'required|string|max:20',
        ]);

        Footer::create([
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'link_youtube' => $request->youtube,
            'link_instagram' => $request->instagram,
            'link_linkedin' => $request->linkedin,
            'link_tiktok' => $request->tiktok,
            'no_pengembang' => $request->pengembang
        ]);

        return redirect()->route('admin.daftar-footer')->with('success', 'Data Footer berhasil ditambahkan!');
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
        $footer = Footer::findOrFail($id);
        return view('admin.manweb.edit-footer', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'youtube' => 'required|url|max:255',
            'instagram' => 'required|url|max:255',
            'linkedin' => 'required|url|max:255',
            'tiktok' => 'required|url|max:255',
            'pengembang' => 'required|string|max:20',
        ]);

        $footer = Footer::findOrFail($id);
        $footer->alamat = $request->alamat;
        $footer->email = $request->email;
        $footer->no_telp = $request->no_telp;
        $footer->no_pengembang = $request->pengembang;
        $footer->link_instagram = $request->instagram;
        $footer->link_youtube = $request->youtube;
        $footer->link_linkedin = $request->linkedin;
        $footer->link_tiktok = $request->tiktok;

        $footer->save();

        return redirect()->route('admin.daftar-footer')->with('success', 'Data Footer berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $footer = Footer::findOrFail($id);

        $footer->delete();

        return redirect()->route('admin.daftar-footer')->with('success', 'Data Footer berhasil dihapus!');
    }
}
