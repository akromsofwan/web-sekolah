@extends('admin.app')

@section('title')
	Page Admin
@endsection

@section('styles')
	<style>
	</style>
@endsection
@section('content')
	
	@if(session('tambah'))
	<div class="alert alert-primary alert-dismissible fade show mt-3" role="alert">
	  {{session('tambah')}}
	  </button>
	</div>
	@endif

	@if(session('hapus'))
	<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
	  {{session('hapus')}}
	</div>
	@endif

	@if(session('update'))
	<div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
	  {{session('update')}}
	</div>
	@endif

	@if(session('login'))
	<div class="alert alert-primary alert-dismissible fade show mt-3" role="alert">
	  {{session('login')}}
	</div>
	@endif

	<h2 class="text-center mt-3">Daftar Calon Siswa</h2>
	<div class="row">
		<div class="col-md-1">
			<a class="btn btn-primary" href="{{route('tambah')}}">Tambah</a>		
		</div>
		<div class="col-md-11">
            <form method="akrom" method="GET">
              <div class="input-group">
              <input type="text" class="form-control" placeholder="Enter keyword..." name="cari" autocomplete="off" autofocus="">
              <span class="input-group-prepend">
                <button type="submit" class="btn btn-info">Cari</button>
              </span>
            </div>
            </form>
		</div>
	</div>

	<div class="br1">
	<table class="table table-sm table-bordered mt-2">
	  <thead class="thead-light">
	    <tr>
	      <th scope="col" class="text-center">No</th>
	      <th scope="col">Nama</th>
	      <th scope="col" class="text-center">L/P</th>
	      <th scope="col">TTL</th>
	      <th scope="col">Asal</th>
	      <th scope="col">Ibu</th>
	      <th scope="col">Jurusan</th>
	      <th scope="col">Aksi</th>
	    </tr>
	  </thead>
	    	<?php $no = 1; ?>
	    	@foreach($daftar_siswa as $siswa)
	  <tbody>
	    <tr>
	      <td class="text-center">{{$no}}</td>
	      <td>{{$siswa->nama_lengkap}}</td>
	      <td class="text-center">{{$siswa->gender}}</td>
	      <td>{{$siswa->ttl}}</td>
	      <td>{{$siswa->asal_sekolah}}</td>
	      <td>{{$siswa->nama_ibu}}</td>
	      <td>{{$siswa->jurusan}}</td>
	      <td>
	      	<a class="btn btn-info btn-sm" href="{{$siswa->id}}/detail">Detail</a>
	      	<a class="btn btn-warning btn-sm" href="{{$siswa->id}}/edit">Edit</a>
	      	<a class="btn btn-danger btn-sm" href="{{$siswa->id}}/delete" onclick="return confirm('Apakah anda ingin menghapus data ini?');">Hapus</a>
	      </td>
	    </tr>
	  </tbody>
	  		<?php $no++; ?>
	      @endforeach
	</table>
	</div>
	    {{$daftar_siswa->links()}}

@endsection