@extends('layout.main2')

@section('title', 'Berita')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Daftar Berita</h1>
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
        <div class="content mt-2">

            <div class="card-body">
                <div>
                    <a href="/berita/create" class="btn btn-info mb-4">Tambah Berita</a>
                </div>

                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col" style="text-align: center;">No</th>
                        <th scope="col" style="text-align: center;">Judul Berita</th>
                        <th scope="col" style="text-align: center;">Kategori</th>
                        <th scope="col" style="text-align: center;">Publisher</th>
                        <th scope="col" style="text-align: center;">Tanggal</th>
                        <th scope="col" style="text-align: center;">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($berita as $berita)
                        <tr>
                        <th scope="row" style="text-align: center;">{{$loop->iteration}}</th>
                        <td>{{$berita->judul_berita}}</td>
                        <td>{{$berita->kategori_berita->nama_kategori}}</td>
                        <td>{{$berita->publisher}}</td>
                        <td>{{$berita->created_at}}</td>
                        <td style="text-align: center; width: 20%; ">
                        <a href="/berita/edit" class="btn btn-info">Edit</a>
                        <form action="" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger ml-2">Delete</button>
                        </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>

            </div>
        </div>
    </div>    
@endsection