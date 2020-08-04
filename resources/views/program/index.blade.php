@extends('layout.main2')

@section('title', 'Program')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Daftar Program</h1>
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
                    <a href="/program/create" class="btn btn-info mb-4">Tambah Program</a>
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
                        <th scope="col" style="text-align: center;">Nama Program</th>
                        <th scope="col" style="text-align: center;">Anggaran</th>
                        <th scope="col" style="text-align: center;">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($program as $item)
                        <tr>
                        <th scope="row" style="text-align: center;">{{$loop->iteration}}</th>
                        <td>{{ $item->nama_program }}</td>
                        <td style="text-align: center;">Rp.{{ $item->anggaran }}</td>
                        <td style="text-align: center; width: 20%; ">
                        <a href="program/{{ $item->id }}/edit" class="btn btn-info">Edit</a>
                        <form action="program/{{ $item->id }}/delete" method="post" class="d-inline">
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