@extends('layout.main2')

@section('title', 'Home')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Homepages</h1>
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
            <h4>Dashboard</h4>
        </div>
        <div class="content mt-3">

            <div class="animated fadeIn">
            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            	tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    </div>
    </div>    
@endsection