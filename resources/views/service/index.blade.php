@extends('layout.main2')

@section('title', 'Dashboard')

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
                    <a href="/service/create" class="btn btn-info mb-4">Add Service</a>
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
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Detail</th>
                        <th scope="col" style="text-align: center;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($service as $item)
                        <tr>
                        <th scope="row" style="text-align: center;">{{$loop->iteration}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->detail}}</td>
                        <td style="text-align: center; width: 20%; ">
                        <a href="/service/{{ $item->id }}/edit" class="btn btn-info">Edit</a>
                        <form action="/service/{{ $item->id }}" method="post" class="d-inline">
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