@extends('layout.master')

@section('content')

<div class="card-body">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Comment</h3>
    </div>
           @forelse($posts as $key => $post)
            <tr>
              <td>{{ $post}}</td>
              <td  style="display: flex;">
                <form action="/posts/{{$post->id}}" method="post">
                @csrf
                @method('DELETE')
                  <input type="submit" value="Delete" onclick="return confirm('Delete {{$post->judul}}');" class="btn btn-danger btn-sm ml-1">
                </form>
              </td>
            </tr>
          @empty
          <tr>
            <td colspan="8" align="center">No Comment</td>
          </tr>
          @endforelse

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