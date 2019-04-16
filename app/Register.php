<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'register';
    protected $fillable = [
		'nama_lengkap',
		'nama_panggilan',
		'gender',
		'ttl_siswa',
		'jurusan',
		'agama',
		'anak_ke',
		'jml_saudara',
		'alamat',
		'no_hp',
		'tinggal_dengan',
		'jarak',
		'penyakit_berat',
		'kelainan_jasmani',
		'cita_cita',
		'hobi',
		'motto',
		'rokok',
		'asal_sekolah',
		'alamat_sekolah',
		'tahun_lulus',
		'no_ijazah',
		'nisn',
		'nama_ayah',
		'ttl_ayah',
		'agama_ayah',
		'pendidikan_ayah',
		'pekerjaan_ayah',
		'penghasilan_ayah',
		'alamat_ayah',
		'nama_ibu',
		'ttl_ibu',
		'agama_ibu',
		'pendidikan_ibu',
		'pekerjaan_ibu',
		'penghasilan_ibu',
		'alamat_ibu',
		'no_hp_ortu',
		'nama_wali',
		'ttl_wali',
		'agama_wali',
		'pendidikan_wali',
		'pekerjaan_wali',
		'penghasilan_wali',
		'alamat_wali',
		'no_hp_wali'
    ];

}
