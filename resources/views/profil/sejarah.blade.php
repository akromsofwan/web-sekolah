@extends('layouts.app')

@section('styles')
    @include('layouts.stylehome')
@endsection

@section('title')
	SMK MUSI Sejarah
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
	<h2>Sejarah SMK MUHAMMADIYAH KESESI</h2>
	<div class="row">
		<div class="col-md-8 offset-md-2 mb-3">
			<img src="{{('/img/sejarah.jpg')}}" class="img-fluid" alt="Responsive image">
		</div>
	</div>

	<div>
		<h4>Sejarah Singkat</h4>
		<p>Menjadi semangat baru dalam mencerdaskan kehidupan bangsa melalui dunia pendidikan yang mendorong para generasi muda Muhammadiyah Cabang Kesesi mendirikan lembaga pendidikan Sekolah Menengah Kejuruan (SMK). Sehingga pada hari Sabtu, 20 Oktober 2012 dimulai rapat perdana pembentukan SMK Muhammadiyah Kesesi oleh PCM Kesesi, berjalannya waktu terbentuklah panitia pendirian SMK Muhammadiyah Kesesi yang diketuai oleh Sholeh Zafudin, S.Pd dan dibantu sekretaris Moh. Abdul Kodir, S.Pd.I sehingga semakin mantap untuk membuat proposal pengajuan sekolah baru namun masih terkendala lahan yang belum dimiliki. Namun bagai tumbu nemui tutup-istilah orang jawa, PCM dan panitia pendirian SMK diundang oleh seorang aghnia Bapak Suharno untuk menerima tanah wakaf seluas 4366 m2 yang terletak di Ds. Kaibahan pada tanggal 3 November 2012 sehingga kami langsung sujud syukur.</p>

		<p>Proposal dan kelengkapan lain akhirnya kami ajukan ke dinas pendidikan dan kebudayaan kabupaten pekalongan sehingga pada tanggal 30 April 2013 Kami dikunjungi dinas untuk verifikasi pembukaan sekolah baru, hasil verifikasi dan visitasi akhirnya diumumkan pada tanggal 20 Mei 2013 dengan dikeluarkannya surat dari dinas no 422.1/1604/2013 tentang diijinkannya kami menerima peserta didik baru, sehingga selama satu bulan kami melakukan promosi dan Alhamdulillah atas kehendak Alloh kami menerima 61 Siswa dari 85 yang mendaftar dan kami jadikan 2 Kelas sehingga pada bulan September kami menerima surat ijin operasional dari dinas pendidikan dan kebudayaan kab. Pekalongan dengan Nomor surat 421.5/2807/2013 sehingga resmilah kami mendirikan SMK Muhammadiyah kesesi ditambah dengan dikukuhkan pula surat izin pendirian dari PCM Kesesi pada tanggal 14 Rajab 1434 H bertepatan dengan tanggal 24 Mei 2013 M dengan Nomor surat 063/KEP/IV.0/D/2013. Dan Alhamdulillah di tahun kedua kami sudah bisa membangun 3 Lokal dan telah menerima siswa sebanyak 5 Rombel dengan jumlah 130 Siswa.</p>

		<p>Tokoh-tokoh yang terlibat langsung dalam pendirian SMK Muhammadiyah Kesesi</p>

		<ul>
			<li>Rohmani, S.Pd (Majelis Dikdasmen)</li>
			<li>Moh. Yahya, BA (Ketua PCM)</li>
			<li>H. Hakim (Ketua PCM)</li>
			<li>Moh. Abdul Kodir, S.Pd.I (Sekretaris PCM)</li>
			<li>Rasbun (Bendahara PCM)</li>
			<li>Sholeh Zafudin (Ketua Panitia)</li>
		</ul>

		<p>Dan masih banyak lagi yang lainnya yang belum kami sebutkan.</p>

		<p>Dan semoga pengharapan kami kehadiran SMK Muhammadiyah Kesesi memberikan manfaat bagi masyarakat dengan menjadi sekolah Unggulan dan Membanggakan.</p>
	</div>
</div>

<!-- KANAN -->
<div class="kanan">
	@include('layouts.floatkanan')
</div>

@endsection