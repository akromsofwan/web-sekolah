@extends('layouts.app')

@section('styles')
    @include('layouts.stylehome')
@endsection

@section('title')
	SMK MUSI Kepala Sekolah
@endsection

@section('styles')
	<style>

	/*DESKTOP*/
	@media (min-width: 992px) {}
	</style>
@endsection

@section('content')

<!-- KIRI -->
<div class="kiri float-left col-md-8 text-center">
	<h2>Kepala Sekolah</h2>

	<div class="row">
		<div class="col-md-8 offset-md-2 mb-3">
			<img src="{{('/img/principal.jpg')}}" class="img-fluid" alt="Responsive image">
		</div>
	</div>
	<div class="row">
		<p>Alhamdulillah, segala puji hanya milik Allah SWT semata, atas kehendak-Nya kami bisa hadir ditengah derasnya perkembangan teknologi informasi setelah kami lakukan update, baik dari sisi pengelolaan maupun isinya. Metamorfosa dunia pendidikan tak lagi bisa dihindari sejalan dengan peradaban IPTEK, termasuk SMK MUHAMMADIYAH KESESI sebagai institusi pendidikan berusaha membangun efektivitas komunikasi dan informasi dalam era globalisasi. Sistem digital telah berkembang secara cepat dan merambah pesat dalam dunia pendidikan</p>
	</div>
</div>

<!-- KANAN -->
<div class="kanan">
	@include('layouts.floatkanan')
</div>

@endsection