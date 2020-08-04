@extends('layout.main2')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
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
        <div class="content mt-3">

            <div class="animated fadeIn">
                Isi home
            </div>
            <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($fitur as $ftr)
                        <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$ftr->name}}</td>
                        <td>{{$ftr->price}}</td>
                        <td>{{$ftr->detail}}</td>
                        <td>
                        <a href="" class="badge badge-success">Edit</a>
                        <a href="" class="badge badge-danger">Delete</a>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                        </div>

        </div>
    </div>    
@endsection