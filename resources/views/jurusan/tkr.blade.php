@extends('layouts.app')

@section('styles')
    @include('layouts.stylehome')
@endsection

@section('title')
	SMK MUSI TKR
@endsection

@section('content')

	<div class="kiri float-left col-md-8">
	<h2 class="text-center">TKR</h2>

	<div class="row">
		<div class="col-md-8 offset-md-2 mb-3">
			<img src="{{('img/tkr.jpg')}}" class="img-fluid" alt="Responsive image">
		</div>
	</div>

	<div class="content">
		<p class="h3">Apa itu TKR</p>
		<p>Bagi kalian yang belom tau, Teknik Kendaraan Ringan adalah sebuah ilmu yang mempelajari kompetisi keahlian bidang teknik otomotif yang menekankan pada bidang jasa perbaikan kendaraan ringan (mobil). Tujuan kompetensi keahlian Teknik Kendaraan Ringan adalah untuk membekali peserta didik dengan keterampilan, pengetahuan, dan sikap pada dunia otomotif. Jadi, para pembaca sekalian sekarang sudah pada tau apa itu Jurusan TKR</p>

		<p>Lulusan kompetensi keahlian Teknik Kendaraan Ringan bekali dengan ilmu pengetahuan dan keterampilan dalam perawatan dan perbaikan motor otomotif, Perawatan dan perbaikan system pemindah tenaga otomotif,  Perawatan dan perbaikan chasis dan suspense otomotif, Perawatan dan perbaikan system kelistrikan otomotif serta dibekali kemampuan dalam berwirausaha sesuai dengan perkembangan kebutuhan masyarakat, dunia industry.</p>
	</div>
</div>


<!-- KANAN -->
<div class="kanan">
	@include('layouts.floatkanan')
</div>

@endsection