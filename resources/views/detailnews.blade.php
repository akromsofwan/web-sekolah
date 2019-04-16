@extends('layouts.app')

@section('title')
	{{$news->judul}}
@endsection

@section('styles')
    @include('layouts.stylehome')
@endsection



@section('content')

<!-- KIRI -->

	<div class="kiri float-left col-md-8">
		<h2 class="text-center">{{$news->judul}}</h2>

		<div class="row text-center">
			<div class="col-md-12 mb-3">
				<img src="{{Storage::url($news->gambar)}}" class="img-fluid" alt="Responsive image">
			</div>
		</div>

		<div class="deskripsi">
			<p class="text-justify">{{$news->post}}</p>
		</div>
	</div>


<!-- KANAN -->
	<div class="kanan">
		@include('layouts.floatkanan')
	</div>


@endsection

