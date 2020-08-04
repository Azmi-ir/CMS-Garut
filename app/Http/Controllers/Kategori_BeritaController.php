<?php

namespace App\Http\Controllers;

use App\kategori_berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Kategori_BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = kategori_berita::all();
        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kategori.create');
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
            'nama_kategori' => 'required',
            'keterangan' => 'required',
        ]);
        kategori_berita::create($request->all());
        return redirect('/kategori')->with('status', 'Service Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kategori_berita  $kategori_berita
     * @return \Illuminate\Http\Response
     */
    public function show(kategori_berita $kategori_berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kategori_berita  $kategori_berita
     * @return \Illuminate\Http\Response
     */
    public function edit(kategori_berita $kategori)
    {
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kategori_berita  $kategori_berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kategori_berita $kategori)
    {
         kategori_berita::where('id', $kategori->id)
            ->update([
                'nama_kategori' => $request->nama_kategori,
                'keterangan' => $request->keterangan
            ]);
        return redirect('/kategori')->with('status', 'Service Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kategori_berita  $kategori_berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategori_berita $kategori)
    {
        kategori_berita::destroy($kategori->id);
        return redirect('/kategori')->with('status', 'kategori berhasil di hapus');
    }
}
