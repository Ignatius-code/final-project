@extends('layout.master')

@section('content')

<div class="card-body">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Vote</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/posts" method="POST">
      @csrf
      <div class="card-body">

        <div class="form-group">
          
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Vote</button>
      </div>
    </form>
  </div>
</div>

@endsection