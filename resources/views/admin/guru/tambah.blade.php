@extends('admin.app')

@section('title')
	Tambah Guru
@endsection

@section('content')

	<form method="POST" action="{{route('gurucreate')}}" enctype="multipart/form-data">
		<h2 class="text-center">Tambah Guru</h2>
			{{csrf_field()}}
	  <div class="form-group">
	    <label for="judul">Nama</label>
	    <input type="text" name="nama" class="form-control" id="judul" placeholder="Enter nama">
	  </div>
	  <div class="form-group">
	    <label for="gambar">Foto</label>
	    <input type="file" name="foto" class="form-control-file" id="gambar">
	  </div>
	  <div class="form-group">
	    <label for="pengampu">Pengampu</label>
	    <input type="text" name="pengampu" class="form-control" id="pengampu" placeholder="Enter pengampu">
	  </div>
	  <div class="form-group">
	      <label for="lahir_anak">TTL</label>
	      <input type="text" name="ttl" autocomplete="off" required class="form-control" id="lahir_anak" placeholder="contoh: Pekalongan, 19-08-2002">
	    </div>
	  <div class="form-group">
	    <label for="alamat">Alamat</label>
	    <textarea name="alamat" autocomplete="off" required class="form-control" id="alamat" rows="3" placeholder="contoh: Jawa Tengah, Pekalongan, Kesesi, Sidomulyo, Semangu, 01, 04"></textarea>
	    <small id="emailHelp" class="form-text text-muted">Isikan alamat dengan lengkap: Prov, Kab, Kec, Ds, Dk, Rw, Rt </small>
	  </div>
	  <div class="form-group">
	    <label for="no_hp">No HP/WA</label>
	    <input type="number" name="no_hp" class="form-control" id="no_hp" placeholder="Enter no_hp">
	  </div>
	  <div class="form-group">
	      <label for="motto">Motto Hidup</label>
	      <textarea name="motto" autocomplete="off" required class="form-control" id="motto" rows="3"></textarea>
	    </div>
	  <button type="submit" class="btn btn-primary">Post</button>
	</form>


@endsection