@extends('layout.master')

@section('content')

<div class="card-body">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Comment</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/posts" method="POST">
      @csrf
      <div class="card-body">

        <div class="form-group">
          <label for="komentar">Your Comment</label>
          <input type="text" class="form-control" id="komentar" name="komentar" placeholder="Add Your Comment">
          @error('komentar')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </form>
  </div>
</div>

@endsection