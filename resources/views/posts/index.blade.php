@extends('layout.master')

@section('content')
<div class="mt-3 ml-3">
  <h2>Dashboard</h2>
  <div class="card-body">
    @if(session('success')) 
      <div class="alert alert-success">
        {{session('success')}}
      </div>
    @endif
    <a class="btn btn-primary mb-2" href="/posts/create">Create New Question</a>
      <table class="table table-bordered">
        <thead>                  
          <tr class="bg-primary" style="color: white;">
            <th style="width: 10px">No</th>
            <th style="width: 200px; text-align: center;">Judul</th>
            <!-- <th>Isi</th> -->
            <th style="width: 400px; text-align: center;">Pertanyaan</th>
            <!-- <th>Tag</th>
            <th>Created At</th>
            <th>Updated At</th> -->
            <th style="width: 40px; text-align: center;">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse($posts as $key => $post)
            <tr>
              <td>{{ $key + 1}}</td>
              <td>{{ $post->judul}}</td>
              <!-- <td>{{ $post->isi}}</td> -->
              <td>{{ $post->pertanyaan}}</td>
              <!-- <td>{{ $post->tag}}</td>
              <td>{{ $post->created_at}}</td>
              <td>{{ $post->updated_at}}</td> -->
              <td  style="display: flex;">
                <a href="/posts/{{$post->id}}" class="btn btn-info btn-sm ml-2">Show</a>
                <a href="/posts/{{$post->id}}/edit" class="btn btn-success btn-sm ml-2">Edit</a>
                <form action="/posts/{{$post->id}}" method="post">
                @csrf
                @method('DELETE')
                  <input type="submit" value="Delete" onclick="return confirm('Delete {{$post->judul}}');" class="btn btn-danger btn-sm ml-2">
                </form>
              </td>
            </tr>
            <tr>
              <td colspan="3" class="table-success">Jawaban: Belum ada jawaban</td>
              <td  style="display: flex;" >
                <a href="/posts/{id}/jawaban" class="btn btn-primary ml-2">Jawab</a>
                <a href="/posts/{id}/komentar" class="btn btn-success ml-2">Komentar</a>
                <a href="/posts/{id}/vote" class="btn btn-warning ml-1">Vote</a>
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
</div>
@endsection