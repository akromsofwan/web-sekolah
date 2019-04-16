@extends('admin.app')

@section('title')
	Page Admin News
@endsection

@section('styles')
	<style>

		img{
			width: 100px;
		}		
		
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

	<h2 class="text-center mt-3">Daftar Kegiatan</h2>
	<div class="row">
		<div class="col-md-1">
			<a class="btn btn-primary" href="{{route('newstambah')}}">Tambah</a>		
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
	      <th>Gambar</th>
	      <th scope="col">Judul</th>
	      <th scope="col">Deskripsi</th>
	      <th >Aksi</th>
	    </tr>
	  </thead>
	    	<?php $no = 1; ?>
	    	@foreach($posts as $post)
	  <tbody>
	    <tr>
	      <td class="text-center">{{$no}}</td>
	      <td>
	      	<img src="{{Storage::url($post->gambar)}}" class="figure-img img-fluid rounded text-center" alt="...">	
	      </td>
	      <td>{{$post->judul}}</td>
	      <td class="post">klik detail</td>
	      <td>
	      	<a class="btn btn-info btn-sm" href="detailnews/{{$post->judul}}">View</a>
	      	<a class="btn btn-warning btn-sm" href="{{$post->id}}/editnews">Edit</a>
	      	<a class="btn btn-danger btn-sm" href="{{$post->id}}/delete" onclick="return confirm('Apakah anda ingin menghapus data ini?');">Hapus</a>
	      </td>
	    </tr>
	  </tbody>
	  		<?php $no++; ?>
	      @endforeach
	</table>
	</div>
	    {{$posts->links()}}

@endsection
