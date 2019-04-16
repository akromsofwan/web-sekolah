@extends('admin.app')

@section('title')
	Detail
@endsection

@section('styles')
    <style>

    	th{
    		width: 250px;
    	}
    	h5{
    		text-indent: 20px;
    	}
    	.ktable{
    		padding: 20px;
    		margin-top: 20px;
    		border-radius: 10px;
    		box-shadow: 0 0 10px 2px rgba(0,0,0,.5);
    		background-color: #FBFBFB;
    	}

    </style>
@endsection


@section('content')

		
		<h2 class="text-center mt-3">Detail Calon Siswa</h2>
		<div class="ktable">
		<table class="table table-bordered mt-1">
		<!-- DATA DIRI -->
		<h4 class="">Data Diri</h4>
	    <tr>
		      <th>Nama Lengkap</th>
		      <td>{{$siswa->nama_lengkap}}</td>
	    </tr>
	    <tr>
		      <th>Nama Panggilan</th>
		      <td>{{$siswa->nama_panggilan}}</td>
	    </tr>
	    <tr>
		      <th>Jenis Kelamin</th>
		      <td>{{$siswa->gender}}</td>
	    </tr>
	    <tr>
		      <th>TTL</th>
		      <td>{{$siswa->ttl_siswa}}</td>
	    </tr>
	    <tr>
		      <th>Jurusan</th>
		      <td>{{$siswa->jurusan}}</td>
	    </tr>
	    <tr>
		      <th>Agama</th>
		      <td>{{$siswa->agama}}</td>
	    </tr>
	    <tr>
		      <th>Anak Ke-</th>
		      <td>{{$siswa->anak_ke}}</td>
	    </tr>
	    <tr>
		      <th>Jumlah Saudara</th>
		      <td>{{$siswa->jml_saudara}}</td>
	    </tr>
	    <tr>
		      <th>Alamat</th>
		      <td>{{$siswa->alamat}}</td>
	    </tr>
	    <tr>
		      <th>No. HP</th>
		      <td>{{$siswa->no_hp}}</td>
	    </tr>
	    <tr>
		      <th>Tinggal Dengan</th>
		      <td>{{$siswa->tinggal_dengan}}</td>
	    </tr>
	    <tr>
		      <th>Jarak</th>
		      <td>{{$siswa->jarak}}</td>
	    </tr>
	    <tr>
		      <th>Penyakit berat</th>
		      <td>{{$siswa->penyakit_berat}}</td>
	    </tr>
	    <tr>
		      <th>Kelainan Jasmani</th>
		      <td>{{$siswa->kelainan_jasmani}}</td>
	    </tr>
	    <tr>
		      <th>Cita-cita</th>
		      <td>{{$siswa->cita_cita}}</td>
	    </tr>
	    <tr>
		      <th>Hobi</th>
		      <td>{{$siswa->hobi}}</td>
	    </tr>
	    <tr>
		      <th>Motto Hidup</th>
		      <td>{{$siswa->motto}}</td>
	    </tr>
	    <tr>
		      <th>Masih Merokok</th>
		      <td>{{$siswa->rokok}}</td>
	    </tr>
	    </table>
	    </div>

		<div class="ktable">
	    <table class="table table-bordered mt-1">
	    <!-- DATA SEKOLAH -->
	    <h4 class="">Data Sekolah</h4>
	    <tr>
		      <th>Asal Sekolah</th>
		      <td>{{$siswa->asal_sekolah}}</td>
	    </tr>
	    <tr>
		      <th>Alamat Sekolah</th>
		      <td>{{$siswa->alamat_sekolah}}</td>
	    </tr>
	    <tr>
		      <th>Tahun Lulus</th>
		      <td>{{$siswa->tahun_lulus}}</td>
	    </tr>
	    <tr>
		      <th>No. Ijazah</th>
		      <td>{{$siswa->no_ijazah}}</td>
	    </tr>
	    <tr>
		      <th>NISN</th>
		      <td>{{$siswa->nisn}}</td>
	    </tr>
	    </table>
	    </div>

		<div class="ktable">
	    <table class="table table-bordered mt-1">
	    <!-- DATA ORANG TUA -->
	    <h4 class="">Data Orang Tua</h4>
	    <h5>Ayah</h5>
	    <tr>
		      <th>Nama</th>
		      <td>{{$siswa->nama_ayah}}</td>
	    </tr>
	    <tr>
		      <th>TTL</th>
		      <td>{{$siswa->ttl_ayah}}</td>
	    </tr>
	    <tr>
		      <th>Agama</th>
		      <td>{{$siswa->agama_ayah}}</td>
	    </tr>
	    <tr>
		      <th>Pendidikan</th>
		      <td>{{$siswa->pendidikan_ayah}}</td>
	    </tr>
	    <tr>
		      <th>Pekerjaan</th>
		      <td>{{$siswa->pekerjaan_ayah}}</td>
	    </tr>
	    <tr>
		      <th>Penghasilan</th>
		      <td>{{$siswa->penghasilan_ayah}}/bulan</td>
	    </tr>
	    <tr>
		      <th>Alamat</th>
		      <td>{{$siswa->alamat_ayah}}</td>
	    </tr>
	  	</table>

	    
	   	<!-- ======================== -->
	   	
	    <table class="table table-bordered mt-1">
	    <h5>Ibu</h5>
	    <tr>
		      <th>Nama</th>
		      <td>{{$siswa->nama_ibu}}</td>
	    </tr>
	    <tr>
		      <th>TTL</th>
		      <td>{{$siswa->ttl_ibu}}</td>
	    </tr>
	    <tr>
		      <th>Agama</th>
		      <td>{{$siswa->agama_ibu}}</td>
	    </tr>
	    <tr>
		      <th>Pendidikan</th>
		      <td>{{$siswa->pendidikan_ibu}}</td>
	    </tr>
	    <tr>
		      <th>Pekerjaan</th>
		      <td>{{$siswa->pekerjaan_ibu}}</td>
	    </tr>
	    <tr>
		      <th>Penghasilan</th>
		      <td>{{$siswa->penghasilan_ibu}}/bulan</td>
	    </tr>
	    <tr>
		      <th>Alamat</th>
		      <td>{{$siswa->alamat_ibu}}</td>
	    </tr>
	    <tr>
		      <th>No HP Ortu</th>
		      <td>{{$siswa->no_hp_ortu}}</td>
	    </tr>
	    </table>
	    </div>

		<div class="ktable">
	    <table class="table table-bordered mt-1">
	    <!-- DATA WALI -->
	    <h4 class="">Data Wali</h4>
	    <tr>
		      <th>Nama</th>
		      <td>{{$siswa->nama_wali}}</td>
	    </tr>
	    <tr>
		      <th>TTL</th>
		      <td>{{$siswa->ttl_wali}}</td>
	    </tr>
	    <tr>
		      <th>Agama</th>
		      <td>{{$siswa->agama_wali}}</td>
	    </tr>
	    <tr>
		      <th>Pendidikan</th>
		      <td>{{$siswa->pendidikan_wali}}</td>
	    </tr>
	    <tr>
		      <th>Pekerjaan</th>
		      <td>{{$siswa->pekerjaan_wali}}</td>
	    </tr>
	    <tr>
		      <th>Penghasilan</th>
		      <td>{{$siswa->penghasilan_wali}}/bulan</td>
	    </tr>
	    <tr>
		      <th>Alamat</th>
		      <td>{{$siswa->alamat_wali}}</td>
	    </tr>
	    <tr>
		      <th>No. HP Wali</th>
		      <td>{{$siswa->no_hp_wali}}</td>
	    </tr>

	    </table>
	    </div>

	  



@endsection


