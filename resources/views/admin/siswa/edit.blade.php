@extends('admin.app')

@section('title')
	Page Admin
@endsection

@section('styles')
	<style>
	</style>
@endsection
@section('content')

	<h2 class="text-center mt-3">Edit Siswa</h2>

  <form method="POST" action="/{{$siswa->id}}/updatesiswa" class="col-md-10">
    {{csrf_field()}}

    <div class="form-group">
      <label for="judul">Nama</label>
      <input type="text" value="{{$siswa->nama}}" name="nama" class="form-control" id="judul" placeholder="Enter judul">
    </div>
    <div class="form-group">
      <label for="judul">Kelas</label>
      <input type="text" value="{{$siswa->kelas}}" name="kelas" class="form-control" id="judul" placeholder="Enter judul">
    </div>
      <div class="form-group">
        <label for="jurusan">Pilih Jurusan</label>
        <select name="jurusan" autocomplete="off" required class="form-control" id="jurusan">
          <option>{{$siswa->jurusan}}</option>
          <option value="RPL">Rekayasa Perangkat Lunak (RPL)</option>
          <option value="PBS">Perbankan Syariah (PBS)</option>
          <option value="TKR">Teknik Kendaraan Ringan (TKR)</option>
          <option value="PHT">Perhotelan (PHT)</option>
        </select>
      </div>
      <div class="form-group">
        <label for="lahir_anak">TTL</label>
        <input type="text" value="{{$siswa->ttl}}" name="ttl" autocomplete="off" required class="form-control" id="lahir_anak" placeholder="contoh: Pekalongan, 19-08-2002">
      </div>
	  <div class="form-group">
	    <label for="alamat">Alamat</label>
	    <textarea name="alamat" autocomplete="off" required class="form-control" id="alamat" rows="3" placeholder="contoh: Jawa Tengah, Pekalongan, Kesesi, Sidomulyo, Semangu, 01, 04">{{$siswa->alamat}}</textarea>
	    <small id="emailHelp" class="form-text text-muted">Isikan alamat dengan lengkap: Prov, Kab, Kec, Ds, Dk, Rw, Rt </small>
	  </div>
      <div class="form-group">
        <label for="motto">Motto Hidup</label>
        <textarea name="motto" autocomplete="off" required class="form-control" id="motto" rows="3">{{$siswa->motto}}</textarea>
      </div>

    <button type="submit" class="btn btn-outline-warning mb-5">Update</button>
  </form>

@endsection