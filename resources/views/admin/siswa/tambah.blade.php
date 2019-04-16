@extends('admin.app')

@section('title')
	Tambah Siswa
@endsection

@section('content')

	<form method="POST" action="{{route('siswacreate')}}" enctype="multipart/form-data">
		<h2 class="text-center">Tambah Siswa</h2>
			{{csrf_field()}}

	  <div class="form-group">
      <label for="judul">Nama</label>
      <input type="text" name="nama" class="form-control" id="judul" placeholder="Enter judul">
    </div>
    <div class="form-group">
      <label for="judul">Kelas</label>
      <input type="text" name="kelas" class="form-control" id="judul" placeholder="Enter judul">
    </div>
    <div class="form-group">
      <label for="jurusan">Pilih Jurusan</label>
      <select name="jurusan" autocomplete="off" required class="form-control" id="jurusan">
        <option value="RPL">Rekayasa Perangkat Lunak (RPL)</option>
        <option value="PBS">Perbankan Syariah (PBS)</option>
        <option value="TKR">Teknik Kendaraan Ringan (TKR)</option>
        <option value="PHT">Perhotelan (PHT)</option>
      </select>
    </div>
	  <div class="form-group">
	    <label for="gambar">Foto</label>
	    <input type="file" name="foto" class="form-control-file" id="gambar">
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
      <label for="motto">Motto Hidup</label>
      <textarea name="motto" autocomplete="off" required class="form-control" id="motto" rows="3"></textarea>
    </div>
	  <button type="submit" class="btn btn-primary">Tambah siswa</button>
	</form>


@endsection