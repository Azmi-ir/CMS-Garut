@extends('layout.main2')

@section('title', 'Tambah Program')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Program</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><i class="fa fa-dashboard"></i></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')
        <div style="display: flex; align-items: center; justify-content: center;">
        <div class="card" style="width: 750px">
        <div class="card-header">
            <h4>Buat program</h4>
        </div>
        <div class="content mt-3">
        <div class="card-body card-block">
             
            <form method="post" action="/program">
            @csrf
            
            <div class="form-group">
            <label for="nama_program">Nama Program</label>
            <input type="text" class="form-control @error('nama_program') is-invalid @enderror" id="nama_program" placeholder="Input nama program" name="nama_program" value="{{ old('nama_program') }}">
            @error('nama_program')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>

            <div class="form-group">
            <label for="anggaran">Anggaran</label>
            <input type="text" class="form-control @error('anggaran') is invalid @enderror" id="anggaran" placeholder="Masukan Anggaran" name="anggaran" value="{{ old('anggaran') }}">
            @error('anggaran')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>
            <div class="card-footer">
            <button type="submit" class="btn btn-info">Tambah Program</button>
            <a href="/program" class="btn btn-success ml-1">Return</a>
            </div>
            </form>

            </div>
        </div> 
        </div>
        </div>
@endsection