@extends('layout.master')

@section('content')

<div class="card-body">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Jawaban</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/posts" method="POST">
      @csrf
      <div class="card-body">

        <div class="form-group">
          <label for="jawaban">Your Answer</label>
          <input type="text" class="form-control" id="jawaban" name="jawaban" placeholder="Jawaban">
          @error('jawaban')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Jawab</button>
      </div>
    </form>
  </div>
</div>

@endsection