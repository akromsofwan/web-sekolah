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

  <h2 class="text-center mt-3">Edit Kegiatan</h2>

  <form method="POST" action="/{{$post->id}}/updatenews" class="col-md-10">
    {{csrf_field()}}

    <div class="form-group">
      <label for="judul">Judul Kegiatan</label>
      <input type="text" value="{{$post->judul}}" name="judul" class="form-control" id="judul" placeholder="Enter judul">
    </div>
    <div class="form-group">
    <label for="Deskripsi">Deskripsi</label>
      <textarea class="form-control" name="post" id="Deskripsi" rows="20">{{$post->post}}</textarea>
    </div>

    <button type="submit" class="btn btn-outline-warning mb-5">Update</button>
  </form>

@endsection