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
        <div style="display: flex; align-items: center; justify-content: center;">
        <div class="card" style="width: 750px">
        <div class="card-header">
            <h4>Edit Service Details</h4>
        </div>
        <div class="content mt-3">
        <div class="card-body card-block">
             
            <form method="post" action="/service/{{ $service->id }}">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Input Service's Name" name="name" value="{{ $service->name }}">
            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Input Service's Price" name="price" value="{{ $service->price }}">
            @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="detail">Detail</label>
            <input type="text" class="form-control @error('detail') is invalid @enderror" id="detail" placeholder="Input Service's Details" name="detail" value="{{ $service->detail }}">
            @error('detail')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="card-footer">
        <button type="submit" class="btn btn-info">Save</button>
        <a href="/service" class="btn btn-success ml-2">Return</a>
        </div>
    </form>

            </div>
        </div> 
        </div>
        </div>
@endsection