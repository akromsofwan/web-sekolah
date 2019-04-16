@extends('layouts.app')

@section('styles')
    @include('layouts.stylehome')
@endsection

@section('title')
	SMK MUSI PBS
@endsection

@section('content')

	<div class="kiri float-left col-md-8">
	<h2 class="text-center">PBS</h2>

	<div class="row">
		<div class="col-md-8 offset-md-2 mb-3">
			<img src="{{('img/pbs.jpg')}}" class="img-fluid" alt="Responsive image">
		</div>
	</div>

	<div class="content">
		<p class="h3">PENGERTIAN DAN PEMAHAMAN SISTEM PERBANKAN SYARIAH </p>
		<p>“Sistem perbankan yang saling menguntungkan, dengan keanekaragaman produksi dan skema keuangan yang lebih variatif”
			Sistem perbankan syariah adalah alternatif sistem perbankan yang saling menguntungkan kedua belah pihak (nasabah dan bank), yang di dukung oleh keanekaragaman produk dan skema keuangan yang lebih variatif, dan dilakukan secara transparan agar adil bagi kedua belah pihak. Perbankan yang kredibel dan menjadi pilihan masyarakat Indonesia.</p>
		<p>Kehadiran sistem perbankan syariah di Indonesia semakin mudah di temukan oleh masyarakat, dengan mengenali logo iB (ai-Bi) di 		bank-bank terkemukan terdekat. iB (ai-Bi) memudahkan masyarakat untuk mengenali tersedianya jasa perbankan syariah di manapun di seluruh Indonesia. Logo iB (ai-Bi) merupakan penanda identitas industri perbankan syariah di Indonesia, yang merupakan kritalisasi 	dari nilai-nilai utama sistem perbankan syariah yang modern, transparan, berkeadilan, seimbang dan beretikan. Dengan adanya iB sebagai penanda, masyarakat akan merasa lebih nyaman karena produk dan jasa layanan perbankan yang diberikan akan mengutamakan nilai-nilai keadilan, transparan, keseimbangan etika, dan kebaikan sosial bersama.</p>
		<p>Perbedaan utama antara sistem perbankan syariah dengan sistem perbankan konvesional terletak pada:
    		Jenis produk yang lebih beragam dan skema keuangan yang lebih bervariasi Pengolahan dana masyarakat yang transparan, sehingga lebih adil bagi nasabah dan bank.</p>
    	<p>Pembiayaan berdasarkan prinsip jual beli dengan marjin (Murabahah)
Murabahah adalah transaksi jual-beli di mana bank bertindak sebagai penjual sementara nasabah sebagai pembeli. Harga jual adalah harga beli bank dari pemasok ditambah keuntungan tertentu. Kedua pihak harus menyepakati harga jual dan jangka waktu pembayaran. Harga jual di cantumkan dalam akad jual berlakunya akad. Dalam perbankan, murabahah lazimnya dilakukan dengan cara pembayaran cicilan. Dalam transaksi ini barang di serahkan segera setelah akad sedangkan pembayaran dilakukan secara tangguh.</p>
	</div>
</div>


<!-- KANAN -->
<div class="kanan">
	@include('layouts.floatkanan')
</div>

@endsection