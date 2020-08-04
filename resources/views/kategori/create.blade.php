@extends('layout.main2')

@section('title', 'Tambah kategori')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>kategori</h1>
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
            <h4>Tambah kategori</h4>
        </div>
        <div class="content mt-3">
        <div class="card-body card-block">
             
            <form method="post" action="/kategori">
            @csrf
            
            <div class="form-group">
            <label for="nama_kategori">NamaKategori</label>
            <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori" placeholder="Input nama kategori" name="nama_kategori" value="{{ old('nama_kategori') }}">
            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>

            <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control @error('keterangan') is invalid @enderror" id="keterangan" placeholder="Input keterangan" name="keterangan" value="{{ old('keterangan') }}">
            @error('keterangan')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>
            <div class="card-footer">
            <button type="submit" class="btn btn-info">Tambah kategori</button>
            <a href="/kategori" class="btn btn-success ml-1">Return</a>
            </div>
            </form>

            </div>
        </div> 
        </div>
        </div>
@endsection