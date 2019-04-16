@extends('admin.app')

@section('title')
  Update Program
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

  <h2 class="text-center mt-3">Edit Kegiatan</h2>

  <form method="POST" action="/{{$program->id}}/updateprogram" class="col-md-10">
    {{csrf_field()}}

    <div class="form-group">
      <label for="nama">Nama Kegiatan</label>
      <input type="text" value="{{$program->nama}}" name="nama" class="form-control" id="nama" placeholder="Enter nama">
    </div>
    <div class="form-group">
    <label for="Deskripsi">Deskripsi</label>
      <textarea class="form-control" name="deskripsi" id="Deskripsi" rows="20">{{$program->deskripsi}}</textarea>
    </div>

    <button type="submit" class="btn btn-outline-warning mb-5">Update</button>
  </form>

@endsection