@extends('layouts.app')

@section('styles')
    @include('layouts.stylehome')
@endsection

@section('title')
	SMK MUSI PHT
@endsection

@section('content')

	<div class="kiri float-left col-md-8">
	<h2 class="text-center">PHT</h2>

	<div class="row">
		<div class="col-md-8 offset-md-2 mb-3">
			<img src="{{('img/pht.jpg')}}" class="img-fluid" alt="Responsive image">
		</div>
	</div>

	<div class="content">
		<p class="h3">Apa itu Pariwisata?</p>
		<p>Subyek pembelajaran di program studi Pariwisata adalah semua hal yang berkaitan dengan pariwisata. Biasanya meliputi manajemen destinasi, tour and travel, dan perhotelan. Para lulusan jurusan ini diharapkan mampu memberikan pelayanan hospitalitas yang berkualitas. Selain itu, mahasiswa diharapkan memiliki ketertarikan pada kebudayaan Indonesia sekaligus bisnis. </p>

		<p class="h3">Kenapa Kamu Memilih Jurusan Ini?</p>
		<p>Pariwisata adalah jurusan yang paling menyenangkan, terutama bagi kamu yang punya hobi jalan-jalan. Tapi, jangan berpikir bahwa dengan memilih jurusan ini kamu hanya akan jalan-jalan melulu. Kamu harus bekerja dengan sangat serius. Pariwisata adalah bidang yang tak akan pernah surut, dan saat ini sedang mengalami pertumbuhan yang cukup bagus.</p>

		<p class="h3">Prospek Kerja Jurusan Pariwisata</p>
		<p>Saat ini sektor pariwisata Indonesia sedang bergairah. Pemerintah sedang gencar meningkatkan kualitas industri pariwisata. Oleh karena itu, peluang bekerja pun juga semakin lebar. Lulusan program studi Pariwisata dapat bekerja sebagai pemandu wisata, hotelier, pengusaha akomodasi pariwisata seperti hotel dan penginapan, manajer pusat rekreasi, event organizer, dan masih banyak lagi.</p>
	</div>
</div>


<!-- KANAN -->
<div class="kanan">
	@include('layouts.floatkanan')
</div>

@endsection