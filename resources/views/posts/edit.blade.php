@extends('layout.master')

@section('content')
<div class="card-body ml-2 mt-3">
	<div class="card card-primary">
	  <div class="card-header">
	    <h3 class="card-title">Edit Post {{$post->id}}</h3>
	  </div>
	  <!-- /.card-header -->
	  <!-- form start -->
	  <form role="form" action="/posts/{{$post->id}}" method="POST">
	  	@csrf
	  	@method('PUT')
	    <div class="card-body">
	      <div class="form-group">
	        <label for="judul">Judul</label>
	        <input type="text" class="form-control" id="judul" name="judul" value="{{old('judul', $post->judul)}}">
	        @error('judul')
			    <div class="alert alert-danger">{{ $message }}</div>
			@enderror
	      </div>
	      <div class="form-group">
	        <label for="isi">Isi</label>
	        <input type="text" class="form-control" id="isi" name="isi" value="{{old('isi', $post->isi)}}">
	        @error('isi')
			    <div class="alert alert-danger">{{ $message }}</div>
			@enderror
	      </div>
	      <div class="form-group">
	        <label for="pertanyaan">Pertanyaan</label>
	        <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" value="{{old('pertanyaan', $post->pertanyaan)}}">
	        @error('pertanyaan')
			    <div class="alert alert-danger">{{ $message }}</div>
			@enderror
	      </div>
	      <div class="form-group">
	        <label for="tag">Tag</label>
	        <input type="text" class="form-control" id="tag" name="tag" value="{{old('tag', $post->tag)}}">
	        @error('tag')
			    <div class="alert alert-danger">{{ $message }}</div>
			@enderror
	      </div>
	    <!-- /.card-body -->

	    <div class="card-footer">
	      <button type="submit" class="btn btn-primary">Update</button>
	    </div>
	  </form>
	</div>
</div>

@endsection