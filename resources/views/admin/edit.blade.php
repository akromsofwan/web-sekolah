@extends('admin.app')

@section('title')
  Update
@endsection

@section('styles')
  <style>
    .datadiri, .datasekolah, .dataortu, .datawali{
      box-shadow:  0 0 5px 5px rgba(0,0,0,.2);
      border-radius: 20px;
    }
    h4{
      text-indent: 10px;
      font-size: 20px;
    }
  </style>
@endsection


@section('content')

  <h2 class="text-center mt-3">Edit Calon Siswa</h2>

  <form method="POST" action="/{{$siswa->id}}/update" class="col-md-10">
    {{csrf_field()}}
    <!-- DATA BIODATA -->
    <h1>Edit Pendaftaran</h1>
    <div class="datadiri p-4 mt-3">
      <h3>Data Diri</h3>
      <div class="form-group">
        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" value="{{$siswa->nama_lengkap}}" name="nama_lengkap" autocomplete="off" required class="form-control" id="nama_lengkap" placeholder="Masukkan nama lengkap">
      </div>
      <div class="form-group">
        <label for="nama_panggilan">Nama Panggilan</label>
        <input type="text" value="{{$siswa->nama_panggilan}}" name="nama_panggilan" autocomplete="off" required class="form-control" id="nama_panggilan" placeholder="Masukkan nama panggilan">
      </div>
      <div class="form-group">
        <label for="gender">Jenis Kelamin</label>
        <select name="gender" autocomplete="off" required class="form-control" id="gender">
          <option>{{$siswa->gender}}</option>
          <option value="L">Laki-Laki</option>
          <option value="P">Perempuan</option>
        </select>
      </div>
      <div class="form-group">
        <label for="lahir_anak">TTL</label>
        <input type="text" value="{{$siswa->ttl_siswa}}" name="ttl_siswa" autocomplete="off" required class="form-control" id="lahir_anak" placeholder="contoh: Pekalongan, 19-08-2002">
      </div>
      <div class="form-group">
        <label for="jurusan">Pilih Jurusan</label>
        <select name="jurusan" autocomplete="off" required class="form-control" id="jurusan">
          <option>{{$siswa->jurusan}}</option>
          <option value="RPL">Rekayasa Perangkat Lunak (RPL)</option>
          <option value="PBS">Perbankan Syariah (PBS)</option>
          <option value="TKR">Teknik Kendaraan Ringan (TKR)</option>
          <option value="PHT">Perhotelan (PHT)</option>
        </select>
      </div>
      <div class="form-group">
        <label for="agama">Agama</label>
        <select name="agama" autocomplete="off" required class="form-control" id="agama">
          <option>{{$siswa->agama}}</option>
          <option>Islam</option>
          <option>Kristen</option>
          <option>Hindhu</option>
          <option>Budha</option>
          <option>Konghucu</option>
        </select>
      </div>
      <div class="form-group">
        <label for="anak_ke">Anak Ke-</label>
        <select name="anak_ke" autocomplete="off" required class="form-control" id="anak_ke">
          <option>{{$siswa->anak_ke}}</option>
          <?php for($i=1; $i<=10; $i++) : ?>
          <option>{{$i}}</option>
          <?php endfor ?>
        </select>
      </div>
      <div class="form-group">
        <label for="jml_saudara">Jumlah Saudara</label>
        <select name="jml_saudara" autocomplete="off" required class="form-control" id="anak_ke">
          <option>{{$siswa->jml_saudara}}</option>
          <?php for($i=1; $i<=10; $i++) : ?>
          <option>{{$i}}</option>
          <?php endfor ?>
        </select>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" autocomplete="off" required class="form-control" id="alamat" rows="3" placeholder="contoh: Jawa Tengah, Pekalongan, Kesesi, Sidomulyo, Semangu, 01, 04">{{$siswa->alamat}}</textarea>
        <small id="emailHelp" class="form-text text-muted">Isikan alamat dengan lengkap: Prov, Kab, Kec, Ds, Dk, Rw, Rt </small>
      </div>
      <div class="form-group">
        <label for="no_hp">No. HP</label>
        <input type="text" value="{{$siswa->no_hp}}" name="no_hp" autocomplete="off" required class="form-control" id="no_hp" placeholder="Masukkan no. hp">
      </div>
      <div class="form-group">
        <label for="tinggal_dengan">Tinggal Dengan</label>
        <select name="tinggal_dengan" autocomplete="off" required class="form-control" id="tinggal_dengan">
          <option>{{$siswa->tinggal_dengan}}</option>
          <option>Orang Tua</option>
          <option>Wali</option>
          <option>Kost</option>
          <option>Mondok</option>
        </select>
      </div>
      <div class="form-group">
        <label for="jarak">Jarak dari rumah ke sekolah</label>
        <input type="text" value="{{$siswa->jarak}}" name="jarak" autocomplete="off" required class="form-control" id="jarak" placeholder="Masukkan jarka dari rumah ke sekolah">
      </div>
      <div class="form-group">
        <label for="penyakit_berat">Penyakit yang diderita</label>
        <textarea name="penyakit_berat" autocomplete="off" required class="form-control" id="penyakit_berat" rows="2">{{$siswa->penyakit_berat}}</textarea>
      </div>
      <div class="form-group">
        <label for="kelainan_jasmani">Kelainan Jasmani</label>
        <textarea name="kelainan_jasmani" autocomplete="off" required class="form-control" id="kelainan_jasmani" rows="2">{{$siswa->kelainan_jasmani}}</textarea>
      </div>
      <div class="form-group">
        <label for="hobi">Hobi</label>
        <textarea name="cita_cita" autocomplete="off" required class="form-control" id="motto" rows="3">{{$siswa->cita_cita}}</textarea>
      </div>
      <div class="form-group">
        <label for="cita_cita">Cita-Cita</label>
        <textarea name="hobi" autocomplete="off" required class="form-control" id="cita_cita" rows="3">{{$siswa->hobi}}</textarea>
      </div>
      <div class="form-group">
        <label for="motto">Motto Hidup</label>
        <textarea name="motto" autocomplete="off" required class="form-control" id="motto" rows="3">{{$siswa->motto}}</textarea>
      </div>
      <div class="form-group">
        <label for="rokok">Masih Merokok</label>
        <select name="rokok" autocomplete="off" required class="form-control" id="rokok">
          <option>{{$siswa->rokok}}</option>
          <option>Masih</option>
          <option>Bukan Perokok</option>
          <option>Berusaha Berhenti</option>
          <option>Kadang-Kadang</option>
          <option>Sudah Berhenti Total</option>
          <option>Bukan Perokok Aktif</option>
        </select>
      </div>
    </div>

    <!-- DATA SEKOLAH -->
    <div class="datasekolah p-4 mt-3">
      <h3>Data Sekolah</h3>
      <div class="form-group">
        <label for="asal_sekolah">Asal Sekolah</label>
        <input type="text" value="{{$siswa->asal_sekolah}}" name="asal_sekolah" autocomplete="off" required class="form-control" id="asal_sekolah" placeholder="Masukkan asal sekolah">
      </div>
      <div class="form-group">
        <label for="alamat_sekolah">Alamat Sekolah</label>
        <input type="text" value="{{$siswa->alamat_sekolah}}" name="alamat_sekolah" autocomplete="off" required class="form-control" id="alamat_sekolah" placeholder="Masukkan alamat sekolah">
      </div>
      <div class="form-group">
        <label for="tahun_lulus">Tahun Lulus</label>
        <input type="text" value="{{$siswa->tahun_lulus}}" name="tahun_lulus" autocomplete="off" required class="form-control" id="tahun_lulus" placeholder="Masukkan tahun lulus">
      </div>
      <div class="form-group">
        <label for="no_ijazah">No. Ijazah</label>
        <input type="text" value="{{$siswa->no_ijazah}}" name="no_ijazah" autocomplete="off" required class="form-control" id="no_ijazah" placeholder="Masukkan no. ijazah">
      </div>
      <div class="form-group">
        <label for="nisn">NISN</label>
        <input type="text" value="{{$siswa->nisn}}" name="nisn" autocomplete="off" required class="form-control" id="nisn" placeholder="Masukkan NISN">
      </div>
    </div>

    <!-- DATA ORANG TUA -->
    <div class="dataortu p-4 mt-3 ">
      <h3>Data Orang Tua</h3>
      <h4>Ayah</h4>
      <div class="form-group">
        <label for="nama_ayah">Nama Ayah</label>
        <input type="text" value="{{$siswa->nama_ayah}}" name="nama_ayah" autocomplete="off" required class="form-control" id="nama_ayah" placeholder="Nama ayah">
      </div>
      <div class="form-group">
        <label for="ttl_ayah">TTL</label>
        <input type="text" value="{{$siswa->ttl_ayah}}" name="ttl_ayah" autocomplete="off" required class="form-control" id="ttl_ayah" placeholder="contoh: Pekalongan, 19-08-2002">
      </div>
      <div class="form-group">
        <label for="agama_ayah">Agama Ayah</label>
        <select name="agama_ayah" autocomplete="off" required class="form-control" id="agama_ayah">
          <option>{{$siswa->agama_ayah}}</option>
          <option>Islam</option>
          <option>Kristen</option>
          <option>Hindhu</option>
          <option>Budha</option>
          <option>Konghucu</option>
        </select>
      </div>
      <div class="form-group">
        <label for="pendidikan_ayah">Pendidikan Ayah</label>
        <select name="pendidikan_ayah" autocomplete="off" required class="form-control" id="pendidikan_ayah">
          <option>{{$siswa->pendidikan_ayah}}</option>
          <option>SD</option>
          <option>SMP</option>
          <option>SLTA</option>
          <option>S1</option>
          <option>S2</option>
        </select>
      </div>
      <div class="form-group">
        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
        <input type="text" value="{{$siswa->pekerjaan_ayah}}" name="pekerjaan_ayah" autocomplete="off" required class="form-control" id="pekerjaan_ayah" placeholder="Masukkan pekerjaan ayah">
      </div>
      <div class="form-group">
        <label for="penghasilan_ayah">Penghasilan Ayah</label>
        <select name="penghasilan_ayah" autocomplete="off" required class="form-control" id="penghasilan_ayah">
          <option>{{$siswa->penghasilan_ayah}}</option>
          <option>Rp.500.000</option>
          <option>Rp.500.000 - 1.000.000</option>
          <option>Rp.1.000.000 - 1.500.000</option>
          <option>Rp.1.500.000 - 2.000.000</option>
          <option>Rp.2.000.000 - 5.000.000</option>
          <option>Rp.5.000.000 - 10.000.000</option>
          <option>Rp.10.000.000 - 20.000.000</option>
        </select>
      </div>
      <div class="form-group">
        <label for="alamat_ayah">Alamat Ayah</label>
        <textarea name="alamat_ayah" autocomplete="off" required class="form-control" id="alamat_ayah" rows="3" placeholder="contoh: Jawa Tengah, Pekalongan, Kesesi, Sidomulyo, Semangu, 01, 04">{{$siswa->alamat_ayah}}</textarea>
        <small id="emailHelp" class="form-text text-muted">Isikan alamat dengan lengkap: Prov, Kab, Kec, Ds, Dk, Rw, Rt </small>
      </div>


      <h4>Ibu</h4>
      <div class="form-group">
        <label for="nama_ibu">Nama Ibu</label>
        <input type="text" value="{{$siswa->nama_ibu}}" name="nama_ibu" autocomplete="off" required class="form-control" id="nama_ibu" placeholder="Nama ibu">
      </div>
      <div class="form-group">
        <label for="ttl_ibu">TTL</label>
        <input type="text" value="{{$siswa->ttl_ibu}}" name="ttl_ibu" autocomplete="off" required class="form-control" id="ttl_ibu" placeholder="contoh: Pekalongan, 19-08-2002">
      </div>
      <div class="form-group">
        <label for="agama_ibu">Agama Ibu</label>
        <select name="agama_ibu" autocomplete="off" required class="form-control" id="agama_ibu">
          <option>{{$siswa->agama_ibu}}</option>
          <option>Islam</option>
          <option>Kristen</option>
          <option>Hindhu</option>
          <option>Budha</option>
          <option>Konghucu</option>
        </select>
      </div>
      <div class="form-group">
        <label for="pendidikan_ibu">Pendidikan Ibu</label>
        <select name="pendidikan_ibu" autocomplete="off" required class="form-control" id="pendidikan_ibu">
          <option>{{$siswa->pendidikan_ibu}}</option>
          <option>SD</option>
          <option>SMP</option>
          <option>SLTA</option>
          <option>S1</option>
          <option>S2</option>
        </select>
      </div>
      <div class="form-group">
        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
        <input type="text" value="{{$siswa->pekerjaan_ibu}}" name="pekerjaan_ibu" autocomplete="off" required class="form-control" id="pekerjaan_ibu" placeholder="Masukkan pekerjaan ibu">
      </div>
      <div class="form-group">
        <label for="penghasilan_ibu">Penghasilan ibu</label>
        <select name="penghasilan_ibu" autocomplete="off" required class="form-control" id="penghasilan_ibu">
          <option>{{$siswa->penghasilan_ibu}}</option>
          <option>Rp.500.000</option>
          <option>Rp.500.000 - 1.000.000</option>
          <option>Rp.1.000.000 - 1.500.000</option>
          <option>Rp.1.500.000 - 2.000.000</option>
          <option>Rp.2.000.000 - 5.000.000</option>
          <option>Rp.5.000.000 - 10.000.000</option>
          <option>Rp.10.000.000 - 20.000.000</option>
        </select>
      </div>
      <div class="form-group">
        <label for="alamat_ibu">Alamat Ibu</label>
        <textarea name="alamat_ibu" autocomplete="off" required class="form-control" id="alamat_ibu" rows="3" placeholder="contoh: Jawa Tengah, Pekalongan, Kesesi, Sidomulyo, Semangu, 01, 04">{{$siswa->alamat_ibu}}</textarea>
        <small id="emailHelp" class="form-text text-muted">Isikan alamat dengan lengkap: Prov, Kab, Kec, Ds, Dk, Rw, Rt </small>
      </div>
      <div class="form-group">
        <label for="no_hp_ortu">No. HP Orang Tua</label>
        <input type="text" value="{{$siswa->no_hp_ortu}}" name="no_hp_ortu" autocomplete="off" required class="form-control" id="no_hp_ortu" placeholder="Masukkan no. hp orang tua">
      </div>
    </div>

    <!-- DATA WALI -->
    <div class="datawali p-4 mt-3">
      <h3>Data Wali</h3>
      <div class="form-group">
        <label for="nama_wali">Nama Wali</label>
        <input type="text" value="{{$siswa->nama_wali}}" name="nama_wali" autocomplete="off" required class="form-control" id="nama_wali" placeholder="Nama wali">
      </div>
      <div class="form-group">
        <label for="ttl_wali">TTL</label>
        <input type="text" value="{{$siswa->ttl_wali}}" name="ttl_wali" autocomplete="off" required class="form-control" id="ttl_wali" placeholder="contoh: Pekalongan, 19-08-2002">
      </div>
      <div class="form-group">
        <label for="agama_wali">Agama wali</label>
        <select name="agama_wali" autocomplete="off" required class="form-control" id="agama_wali">
          <option>{{$siswa->agama_wali}}</option>
          <option>Islam</option>
          <option>Kristen</option>
          <option>Hindhu</option>
          <option>Budha</option>
          <option>Konghucu</option>
        </select>
      </div>
      <div class="form-group">
        <label for="pendidikan_wali">Pendidikan Wali</label>
        <select name="pendidikan_wali" autocomplete="off" required class="form-control" id="pendidikan_wali">
          <option>{{$siswa->pendidikan_wali}}</option>
          <option>SD</option>
          <option>SMP</option>
          <option>SLTA</option>
          <option>S1</option>
          <option>S2</option>
        </select>
      </div>
      <div class="form-group">
        <label for="pekerjaan_wali">Pekerjaan Wali</label>
        <input type="text" value="{{$siswa->pekerjaan_wali}}" name="pekerjaan_wali" autocomplete="off" required class="form-control" id="pekerjaan_wali" placeholder="Masukkan pekerjaan wali">
      </div>
      <div class="form-group">
        <label for="penghasilan_wali">Penghasilan Wali</label>
        <select name="penghasilan_wali" autocomplete="off" required class="form-control" id="penghasilan_wali">
          <option>{{$siswa->penghasilan_wali}}</option>
          <option>Rp.500.000</option>
          <option>Rp.500.000 - 1.000.000</option>
          <option>Rp.1.000.000 - 1.500.000</option>
          <option>Rp.1.500.000 - 2.000.000</option>
          <option>Rp.2.000.000 - 5.000.000</option>
          <option>Rp.5.000.000 - 10.000.000</option>
          <option>Rp.10.000.000 - 20.000.000</option>
        </select>
      </div>
      <div class="form-group">
        <label for="alamat_wali">Alamat Wali</label>
        <textarea name="alamat_wali" autocomplete="off" required class="form-control" id="alamat_wali" rows="3" placeholder="contoh: Jawa Tengah, Pekalongan, Kesesi, Sidomulyo, Semangu, 01, 04">{{$siswa->alamat_wali}}</textarea>
        <small id="emailHelp" class="form-text text-muted">Isikan alamat dengan lengkap: Prov, Kab, Kec, Ds, Dk, Rw, Rt </small>
      </div>
      <div class="form-group">
        <label for="no_hp_wali">No. HP Orang Wali</label>
        <input type="text" value="{{$siswa->no_hp_wali}}" name="no_hp_wali" autocomplete="off" required class="form-control" id="no_hp_wali" placeholder="Masukkan no. hp wali">
      </div>
    </div>

    <div class="mt-3 font-weight-light font-italic">
      <p>Dengan ketentuan ini, saya bersedia mematuhi peraturan yang ada di sekolah dan saya berjanji tidak akan melanggar peraturan sekolah</p>
    </div>

    <button type="submit" class="btn btn-outline-warning mb-5">Update</button>
  </form>

@endsection