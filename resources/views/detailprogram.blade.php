@extends('layouts.app')

@section('title')
	{{$program->nama}}
@endsection

@section('styles')
    @include('layouts.stylehome')
@endsection



@section('content')

<!-- KIRI -->

	<div class="kiri float-left col-md-8">
		<h2 class="text-center">{{$program->nama}}</h2>

		<div class="row text-center">
			<div class="col-md-8 offset-md-2 mb-3">
				<img src="{{Storage::url($program->gambar)}}" class="img-fluid" alt="Responsive image">
			</div>
		</div>

		<div class="deskripsi">
			<p class="text-justify">{{$program->deskripsi}}</p>
		</div>
	</div>


<!-- KANAN -->
	<div class="kanan">
		@include('layouts.floatkanan')
	</div>


@endsection