@extends('layout.master')

@section('content')

<div class="card-body">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create New</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/posts" method="POST">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" value="{{old('judul', '')}}" placeholder="Judul" autocomplete="off">
          @error('judul')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="isi">Isi</label>
          <input type="text" class="form-control" id="isi" name="isi" value="{{old('isi', '')}}" placeholder="Isi" autocomplete="off">
          @error('isi')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="pertanyaan">Pertanyaan</label>
          <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" value="{{old('pertanyaan', '')}}" placeholder="Pertanyaan" autocomplete="off">
          @error('pertanyaan')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="tag">Tag</label>
          <input type="text" class="form-control" id="tag" name="tag" value="{{old('tag', '')}}" placeholder="Tag" autocomplete="off">
          @error('tag')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </form>
  </div>
</div>

@endsection