<?php

namespace App\Http\Controllers;

use App\tabel_berita;
use App\kategori_berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Tabel_BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = tabel_berita::all();
        $kategoriBeritas = kategori_berita::all();
        return view('berita.index', compact('berita'))->withkategori_beritas($kategoriBeritas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoriBeritas = kategori_berita::all();
        return view('berita.create')->withkategori_beritas($kategoriBeritas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_berita' => 'required',
            'id_kategori' => 'required',
            'isi_berita' => 'required'
        ]);
        tabel_berita::create($request->all());
        return redirect('/berita')->with('status', 'Service Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tabel_berita  $tabel_berita
     * @return \Illuminate\Http\Response
     */
    public function show(tabel_berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tabel_berita  $tabel_berita
     * @return \Illuminate\Http\Response
     */
    public function edit(tabel_berita $berita)
    {
        return view('berita.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tabel_berita  $tabel_berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tabel_berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tabel_berita  $tabel_berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(tabel_berita $berita)
    {
        //
    }
}
