@extends('layout.main2')

@section('title', 'Tambah Kegiatan')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Kegiatan</h1>
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
            <h4>Buat Kegiatan</h4>
        </div>
        <div class="content mt-3">
        <div class="card-body card-block">
             
            <form method="post" action="/kegiatan">
            @csrf
            
            <div class="form-group">
            <label for="id_program">Program</label>
            <select class="form-control" name="id_program">
               @foreach ($program as $item)
               <option value="{{ $item->id }}">{{ $item->nama_program}}</option>
               @endforeach
            </select>
            </div>

            <div class="form-group">
            <label for="nama_kegiatan">Nama Kegiatan</label>
            <input type="text" class="form-control @error('nama_kegiatan') is-invalid @enderror" id="nama_kegiatan" placeholder="Input nama program" name="nama_kegiatan" value="{{ old('nama_kegiatan') }}">
            @error('nama_kegiatan')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>

            <div class="form-group">
            <label for="anggaran">Anggaran</label>
            <input type="text" class="form-control @error('anggaran') is invalid @enderror" id="anggaran" placeholder="Masukan Anggaran" name="anggaran" value="{{ old('Anggaran') }}">
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