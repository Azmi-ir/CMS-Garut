<?php

namespace App\Http\Controllers;

use App\tabel_kegiatan;
use App\tabel_program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Tabel_KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel_kegiatan = tabel_kegiatan::all();
        $program = tabel_program::all();
        return view('kegiatan.index', compact('tabel_kegiatan'))->withtabel_program($program);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $program = tabel_program::all();
        return view('kegiatan.create')->withtabel_program($program);
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
            'id_program' => 'required',
            'nama_kegiatan' => 'required',
            'Anggaran' => 'required'
        ]);
        tabel_kegiatan::create($request->all());
        return redirect('/kegiatan')->with('status', 'Berhasil Menambah Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tabel_kegiatan  $tabel_kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(tabel_kegiatan $tabel_kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tabel_kegiatan  $tabel_kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(tabel_kegiatan $tabel_kegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tabel_kegiatan  $tabel_kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tabel_kegiatan $tabel_kegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tabel_kegiatan  $tabel_kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(tabel_kegiatan $tabel_kegiatan)
    {
        //
    }
}
