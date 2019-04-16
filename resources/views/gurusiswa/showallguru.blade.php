@extends('layouts.app')

@section('styles')
    @include('layouts.stylehome')
@endsection

@section('title')
	Semua Guru
@endsection

@section('content')

<div class="kiri float-left col-md-9">
	<div class="gurusiswa">
		<h2 class="text-center">Guru & Siswa</h2>
		<h4>Guru</h4>
		<div class="row">
			@foreach($daftar_guru as $guru)
			<div class="col-md-4 col-6 text-center mt-3">
				<figure class="figure">
				  <img src="{{Storage::url($guru->foto)}}" class="figure-img img-fluid rounded-circle text-center" alt="...">
				  <a href=""><p>{{$guru->nama}}</p></a>
				  <p>{{$guru->pengampu}}</p>
				</figure>
			</div>
			@endforeach
		</div>
	</div>
</div>

<!-- KANAN -->
<div class="kanan">
	@include('layouts.floatkanan')
</div>

@endsection