@extends('layouts.app')

@section('styles')
    @include('layouts.stylehome')
@endsection

@section('title')
	SMK MUSI Guru & Karyawan
@endsection

@section('content')

<div class="kiri float-left col-md-8">
	<div class="gurukaryawan">
		<h2 class="text-center">Guru Staf & Karyawan</h2>
		<div class="row">
			@foreach($daftar_guru as $guru)
			<div class="col-md-4 col-6 text-center mt-3">
				<figure class="figure">
				  <img src="{{Storage::url($guru->foto)}}" class="figure-img rounded-circle text-center" alt="...">
				  <a href="detailgurukaryawan/{{$guru->nama}}"><p>{{$guru->nama}}</p></a>
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