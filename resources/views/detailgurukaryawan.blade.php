@extends('layouts.app')

@section('title')
	{{$gurukaryawan->nama}}
@endsection

@section('styles')
    @include('layouts.stylehome')
@endsection



@section('content')

<!-- KIRI -->

	<div class="kiri float-left col-md-8">
		<h2 class="text-center">{{$gurukaryawan->nama}}</h2>
		<div class="detailgurukaryawan">
			<div class="row text-center">
				<div class="col-md-6 offset-md-3 mb-3">
					<img src="{{Storage::url($gurukaryawan->foto)}}" class="figure-img img-fluid rounded-circle text-center" alt="Responsive image">
				</div>
				<div class="col-md-12">
					<table class="table table-bordered mt-1">
					    <tr>
					      <th>Nama Lengkap</th>
					      <td>{{$gurukaryawan->nama}}</td>
					    </tr>
					    <tr>
					      <th>Pengampu</th>
					      <td>{{$gurukaryawan->pengampu}}</td>
					    </tr>
					    <tr>
					      <th>TTL</th>
					      <td>{{$gurukaryawan->ttl}}</td>
					    </tr>
					    <tr>
					      <th>Alamat</th>
					      <td>{{$gurukaryawan->alamat}}</td>
					    </tr>
					    <tr>
					      <th>No HP/WA</th>
					      <td>{{$gurukaryawan->no_hp}}</td>
					    </tr>
					    <tr>
					      <th>Motto</th>
					      <td>{{$gurukaryawan->motto}}</td>
					    </tr>
					    <tr>
					</table>
				</div>
			</div>
		</div>
	</div>


<!-- KANAN -->
	<div class="kanan">
		@include('layouts.floatkanan')
	</div>


@endsection