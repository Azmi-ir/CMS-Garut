<?php

namespace App\Http\Controllers;

use App\tabel_program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Tabel_ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program = tabel_program::all();
        return view('program.index', compact('program'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('program.create');
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
            'nama_program' => 'required',
            'anggaran' => 'required',
        ]);
        tabel_program::create($request->all());
        return redirect('/program')->with('status', 'berhasil menambah program');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tabel_program  $tabel_program
     * @return \Illuminate\Http\Response
     */
    public function show(tabel_program $tabel_program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tabel_program  $tabel_program
     * @return \Illuminate\Http\Response
     */
    public function edit(tabel_program $program)
    {
        return view('program.edit', compact($program));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tabel_program  $tabel_program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tabel_program $program)
    {

        $request->validate([
            'nama_program' => 'required',
            'anggaran' => 'required'
        ]);

        tabel_program::where('id', $program->id)
            ->update([
                'nama_program' => $request->nama_program,
                'anggaran' => $request->anggaran
            ]);
        return redirect('/program')->with('status', 'Service Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tabel_program  $tabel_program
     * @return \Illuminate\Http\Response
     */
    public function destroy(tabel_program $tabel_program)
    {
        //
    }
}
