@extends('layout.main2')

@section('title', 'Edit Kategori')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Kategori</h1>
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
            <h4>Edit Edit kategori</h4>
        </div>
        <div class="content mt-3">
        <div class="card-body card-block">
             
            <form method="post" action="/kategori/{{ $kategori->id }}">
        @method('patch')
        @csrf
        <div class="form-group">
            <label for="nama_kategori">Nama Kategori</label>
            <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori" placeholder="Masukan nama kategori" name="nama_kategori" value="{{$kategori->nama_kategori}}">
            @error('nama_kategori')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control @error('keterangan') is invalid @enderror" id="keterangan" placeholder="masukan keterangan" name="keterangan" value="{{$kategori->keterangan}}">
            @error('keterangan')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="card-footer">
        <button type="submit" class="btn btn-info">Save</button>
        <a href="/kategori" class="btn btn-success ml-2">Return</a>
        </div>
    </form>

            </div>
        </div> 
        </div>
        </div>
@endsection