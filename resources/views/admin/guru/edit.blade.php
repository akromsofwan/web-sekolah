@extends('admin.app')

@section('title')
	Page Admin
@endsection

@section('styles')
	<style>
	</style>
@endsection
@section('content')

	<h2 class="text-center mt-3">Edit Guru</h2>

  <form method="POST" action="/{{$guru->id}}/updateguru" class="col-md-10">
    {{csrf_field()}}

    <div class="form-group">
      <label for="judul">Nama</label>
      <input type="text" value="{{$guru->nama}}" name="nama" class="form-control" id="judul" placeholder="Enter judul">
    </div>
    <div class="form-group">
      <label for="judul">pengampu</label>
      <input type="text" value="{{$guru->pengampu}}" name="pengampu" class="form-control" id="judul" placeholder="Enter judul">
    </div>
    <div class="form-group">
      <label for="lahir_anak">TTL</label>
      <input type="text" value="{{$guru->ttl}}" name="ttl" autocomplete="off" required class="form-control" id="lahir_anak" placeholder="contoh: Pekalongan, 19-08-2002">
    </div>
	  <div class="form-group">
	    <label for="alamat">Alamat</label>
	    <textarea name="alamat" autocomplete="off" required class="form-control" id="alamat" rows="3" placeholder="contoh: Jawa Tengah, Pekalongan, Kesesi, Sidomulyo, Semangu, 01, 04">{{$guru->alamat}}</textarea>
	    <small id="emailHelp" class="form-text text-muted">Isikan alamat dengan lengkap: Prov, Kab, Kec, Ds, Dk, Rw, Rt </small>
	  </div>
    <div class="form-group">
      <label for="judul">No HP/WA</label>
      <input type="number" value="{{$guru->no_hp}}" name="no_hp" class="form-control" id="judul" placeholder="Enter judul">
    </div>
    <div class="form-group">
      <label for="motto">Motto Hidup</label>
      <textarea name="motto" autocomplete="off" required class="form-control" id="motto" rows="3">{{$guru->motto}}</textarea>
    </div>

    <button type="submit" class="btn btn-outline-warning mb-5">Update</button>
  </form>

@endsection