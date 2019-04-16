@extends('layouts.app')

@section('title')
	{{$pengumuman->judul}}
@endsection

@section('styles')
    @include('layouts.stylehome')
@endsection



@section('content')

<!-- KIRI -->

	<div class="kiri float-left col-md-8">
		<h2 class="text-center">{{$pengumuman->judul}}</h2>

		<div class="row text-center">
			<div class="col-md-12 mb-3">
				<img src="{{Storage::url($pengumuman->gambar)}}" class="img-fluid" alt="Responsive image">
				<figcaption class="figure-caption">Dibuat pada {{ $pengumuman->updated_at }}</figcaption>
			</div>
		</div>

		<div class="deskripsi">
			<p class="text-justify">{{$pengumuman->deskripsi}}</p>
		</div>
	</div>


<!-- KANAN -->
	<div class="kanan">
		@include('layouts.floatkanan')
	</div>


@endsection