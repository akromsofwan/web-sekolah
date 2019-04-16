@extends('layouts.app')

@section('styles')
    @include('layouts.stylehome')
@endsection

@section('title')
	SMK MUSI Visi Misi
@endsection

@section('styles')
	<style>

	/*DESKTOP*/
	@media (min-width: 992px) {}
	</style>
@endsection

@section('content')


<!-- KIRI -->
<div class="kiri float-left col-md-8">
	<h2>Visi Misi</h2>
	<div class="row">
		<div class="col-md-8 offset-md-2 mb-3">
			<img src="{{('img/visimisi.jpg')}}" class="img-fluid" alt="Responsive image">
		</div>
	</div>

	<div class="visi">
		<h4>Visi SMK MUHAMMADIYAH KESESI</h4>
		<p class="font-weight-bold">Menjadi sekolah Islami yang berkemajuan, berkarakter, kompeten dan berwirausaha yang bertaraf Internasional</p>
		<p>Indikator Pencapaian Visi:</p>
		<ol>
			<li>Peserta didik beriman dan takwa kepada Alloh SWT</li>
			<li>Dapat membaca, menulis dan menghafal Al Qur’ an</li>
			<li>Berkehidupan Islami dalam memanfaatkan teknologi</li>
			<li>Memiliki akhlaq yang baik tertutama jujur, disiplin dan bertanggung jawab</li>
			<li>Tertib ibadah, belajar dan bekerja</li>
			<li>Menghormati yang lebih tua dan menyayangi yang lebih muda</li>
			<li>Peningkatan kemampuan peserta didik dalam ilmu pengetahuan, teknologi informasi, olah raga, dan seni</li>
			<li>Kompeten sesuai jurusan, menjuarai LKS (Lomba Kompetensi Siswa) dan nilai tertinggi UKK (Ujian Kompetensi Kejuruan)</li>
			<li>Peningkatan jumlah peserta didik yang diterima di dunia Usaha dan Industri serta pada Perguruan Tinggi</li>
			<li>Memiliki jiwa (mindset) kewirausahaan yang matang</li>
			<li>Memiliki wawasan luas dalam memulai dan mengembangkan kewirausahaan</li>
			<li>Berani terjun langsung dalam dunia usaha</li>
			<li>Peningkatan kemampuan berkomunikasi dalam bahasa asing (Inggris dan Arab)</li>
			<li>Melakukan study, student and teacher exchange ke luar negeri</li>
			<li>Pengiriman tenaga kerja trampil ke luar negeri</li>
		</ol>
	</div>

	<div class="misi">
		<h4>Misi SMK MUHAMMADIYAH KESESI</h4>
		<ol>
			<li>Membangun sistem pendidikan Islami yang berkemajuan</li>
			<li>Membiasakan berakhlakulkarimah, tertib ibadah dan saling menghormati</li>
			<li>Menyelanggarakan sekolah berbasis keahlian yang unggul bersama dengan stakeholder, dibidang akademik dan bidang kejuruan</li>
			<li>Mengembangkan kewirausahaan dan kemitraan dengan  dunia usaha dan industri</li>
			<li>Menjalin kerjasama dengan dunia Internasional dalam peningkatan mutu pendidikan dan budaya kerja</li>
		</ol>
	</div>

	<div class="tujuan">
		<h4>Tujuan SMK MUHAMMADIYAH KESESI</h4>
		<ol>
			<li>Mendapatkan pegawai yang sesuai kualifikasi, siap bekerja profesioanal dan mengedepankan niat ibadah dalam bekerja</li>
			<li>Membekali siswa dengan disiplin ilmu agama dan umum yang membanggakan</li>
			<li>Menanamkan pembiasaan positif berupa kejujuran, kedisiplinan dan rasa tanggung jawab kepada pegawai dan siswa</li>
			<li>Mewujudkan pelayanan akademis yang profesional</li>
			<li>Meningkatkan kompetensi dan kualifikasi pendidikan guru dan tata usaha</li>
			<li>Menyiapkan tamatan yang beriman, bertaqwa, berakhlak mulia, berkeahlian profesional, mandiri dan memiliki kualifikasi Internasional</li>
			<li>Meningkatkan kerjasama dan kemitraan dengan dunia usaha/dunia Industri baik di dalam maupun di luar negeri</li>
			<li>Mampu berbahasa asing, memiliki wawasan masa depan dan dapat diandalkan, serta</li>
			<li>Mampu mengolah jiwa (mindset) kewirausahaan menuju pribadi yang mampu menciptakan lapangan kerja sendiri.</li>

		</ol>
	</div>
</div>

<!-- KANAN -->
<div class="kanan">
	@include('layouts.floatkanan')
</div>

@endsection