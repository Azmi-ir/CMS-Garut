@extends('layout.main')

@section('title', 'Service List')
@section('container')
    <div class="container">
      <div class="row">
        <div class="col-5">
    <h1 class="mt-3">Service Details</h1>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $service->name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $service->price }}</h6>
        <p class="card-text">{{ $service->detail}}</p>
        <a href="{{ $service->id }}/edit" class="btn btn-info">Edit</a>
        <form action="{{ $service->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="/service" class="card-link">Return</a>
    </div>
</div>


        </div>
      </div>
    </div>
@endsection
