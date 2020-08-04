@extends('layout.main2')

@section('title', 'Kategori')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Service List</h1>
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
                    <a href="/kategori/create" class="btn btn-info mb-4">Tambah Kategori</a>
                </div>
                @if (session('status'))
                <div class="alert alert-success">
                {{session('status')}}
                </div>

@endif
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col" style="text-align: center;">No</th>
                        <th scope="col" style="text-align: center;">Nama Kategori</th>
                        <th scope="col" style="text-align: center;">Keterangan</th>
                        <th scope="col" style="text-align: center;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($kategori as $kategori_berita)
                        <tr>
                        <th scope="row" style="text-align: center;">{{$loop->iteration}}</th>
                        <td>{{$kategori_berita->nama_kategori}}</td>
                        <td>{{$kategori_berita->keterangan}}</td>
                        <td style="text-align: center; width: 20%; ">
                        <a href="kategori/{{ $kategori_berita->id }}/edit" class="btn btn-info">Edit</a>
                        <form action="kategori/{{ $kategori_berita->id }}" method="post" class="d-inline">
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