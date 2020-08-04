@extends('layout.main2')

@section('title', 'Buat Berita')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Berita</h1>
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
        <div>
        <div class="card">
        <div class="card-header">
            <h4>Buat Berita</h4>
        </div>
        <div class="content mt-1">
        <div class="card-body card-block">
            <form method="post" action="/berita">
            @csrf
            <div class="mb-2">
            <button type="submit" class="btn btn-info">Buat Berita</button>
            <a href="/berita" class="btn btn-success ml-1">Return</a><br>
             </div>
            <div class="form-group">
            <label for="judul_berita">Judul Berita</label>
            <input type="text" class="form-control @error('judul_berita') is-invalid @enderror" id="judul_berita" placeholder="Masukan Judul Berita" name="judul_berita" value="{{ old('judul_berita') }}">
            @error('judul_berita')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="id_kategori">Kategori</label>
           <select class="form-control" name="id_kategori">
               @foreach ($kategoriBeritas as $kategori)
               <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori}}</option>
               @endforeach
           </select>
        </div>

        <div class="form-group">
            <label for="isi_berita">Isi Berita</label>
            <textarea class="form-control tinymce-editor col-md-12" name="isi_berita" id="isi_berita" rows="8">
                Lorem ipsum dolor sit amet
            </textarea>
        </div>
            </form>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{asset('tinymce/tinymce.min.js')}}" referrerpolicy="origin"></script>  
    <script type="text/javascript">
  tinymce.init({
  selector: 'textarea.tinymce-editor',
  height: 500,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount',
  ],
  plugins: 'images',
  toolbar: 'undo redo | formatselect | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help',
  content_css: '//www.tiny.cloud/css/codepen.min.css'
});
    </script>
            </div>
        </div> 
        </div>
        </div>
@endsection