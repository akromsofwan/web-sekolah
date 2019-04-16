@extends('admin.app')

@section('title')
  Tambah Program Unggulan
@endsection

@section('styles')
  <style>
  	form{
  		padding: 10px;
  		box-shadow: 0 0 2px 3px rgba(0,0,0,.5);
  		border-radius: 10px;
  	}
  </style>
@endsection


@section('content')


	<form method="POST" action="{{route('programcreate')}}" enctype="multipart/form-data">
		<h2 class="text-center">Tambah Program Unggulan</h2>
			{{csrf_field()}}
	  <div class="form-group">
	    <label for="judul">Nama</label>
	    <input type="text" name="nama" class="form-control" id="judul" placeholder="Enter judul">
	  </div>
	  <div class="form-group">
	    <label for="gambar">Gambar</label>
	    <input type="file" name="gambar" class="form-control-file" id="gambar">
	  </div>
	  <div class="form-group">
    <label for="Deskripsi">Deskripsi</label>
	    <textarea class="form-control" name="deskripsi" id="Deskripsi" rows="20"></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Post</button>
	</form>

	








@endsection