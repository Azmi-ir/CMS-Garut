@extends('layout.main2')

@section('title', 'Kegiatan')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Daftar Kegiatan</h1>
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
                    <a href="/kegiatan/create" class="btn btn-info mb-4">Tambah Kegiatan</a>
                </div>

                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col" style="text-align: center;">No</th>
                        <th scope="col" style="text-align: center;">Nama Program</th>
                        <th scope="col" style="text-align: center;">Nama Kegiatan</th>
                        <th scope="col" style="text-align: center;">Anggaran</th>
                        <th scope="col" style="text-align: center;">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($tabel_kegiatan as $item)
                        <tr>
                        <th scope="row" style="text-align: center;">{{$loop->iteration}}</th>
                        <td>{{$item->tabel_program->nama_program}}</td>
                        <td>{{$item->nama_kegiatan}}</td>
                        <td>Rp.{{$item->Anggaran}}</td>
                        <td style="text-align: center; width: 20%; ">
                        <a href="" class="btn btn-info">Edit</a>
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