<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register', function (Blueprint $table) {
            $table->bigIncrements('id');
            // DATA BIODATA
            $table->string('nama_lengkap')->unique();
            $table->string('nama_panggilan');
            $table->string('gender');
            $table->string('ttl_siswa');
            $table->string('jurusan');
            $table->string('agama');
            $table->integer('anak_ke');
            $table->integer('jml_saudara');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('tinggal_dengan');
            $table->string('jarak');
            $table->string('penyakit_berat');
            $table->string('kelainan_jasmani');
            $table->string('cita_cita');
            $table->string('hobi');
            $table->string('motto');
            $table->string('rokok');
            // DATA SEKOLAH
            $table->string('asal_sekolah');
            $table->string('alamat_sekolah');
            $table->string('tahun_lulus');
            $table->string('no_ijazah');
            $table->string('nisn');
            // DATA ORANG TUA
            $table->string('nama_ayah');
            $table->string('ttl_ayah');
            $table->string('agama_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('alamat_ayah');
            $table->string('nama_ibu');
            $table->string('ttl_ibu');
            $table->string('agama_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');
            $table->string('alamat_ibu');
            $table->string('no_hp_ortu');
            // DATA WALI
            $table->string('nama_wali');
            $table->string('ttl_wali');
            $table->string('agama_wali');
            $table->string('pendidikan_wali');
            $table->string('pekerjaan_wali');
            $table->string('penghasilan_wali');
            $table->string('alamat_wali');
            $table->string('no_hp_wali');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register');
    }
}
