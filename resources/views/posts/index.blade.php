@extends('layout.master')

@section('content')

  <div class="card-body">
    @if(session('success')) 
      <div class="alert alert-success">
        {{session('success')}}
      </div>
    @endif
    <a class="btn btn-primary mb-2" href="/posts/create">Create New</a>
      <table class="table table-bordered">
        <thead>                  
          <tr>
            <th style="width: 10px">No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Pertanyaan</th>
            <th>Tag</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th style="width: 40px">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse($posts as $key => $post)
            <tr>
              <td>{{ $key + 1}}</td>
              <td>{{ $post->judul}}</td>
              <td>{{ $post->isi}}</td>
              <td>{{ $post->pertanyaan}}</td>
              <td>{{ $post->tag}}</td>
              <td>{{ $post->created_at}}</td>
              <td>{{ $post->updated_at}}</td>
              <td  style="display: flex;">
                <a href="/posts/{{$post->id}}" class="btn btn-info btn-sm mr-1">Show</a>
                <a href="/posts/{{$post->id}}/edit" class="btn btn-success btn-sm">Edit</a>
                <form action="/posts/{{$post->id}}" method="post">
                @csrf
                @method('DELETE')
                  <input type="submit" value="Delete" onclick="return confirm('Delete {{$post->judul}}');" class="btn btn-danger btn-sm ml-1">
                </form>
              </td>
            </tr>
          @empty
          <tr>
            <td colspan="8" align="center">No Post</td>
        </tr>
          @endforelse
        </tbody>
      </table>
    </div>

@endsection