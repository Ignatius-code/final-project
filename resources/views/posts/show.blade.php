@extends('layout.master')

@section('content')
<div class="card-body ml-3 mt-3" >
	<h4>Judul: {{$post->judul}}</h4>
	<p>Isi: {{$post->isi}}</p>
	<p>Pertanyaan: {{$post->pertanyaan}}</p>
	<p>Tag: {{$post->tag}}</p>
	<p>Created At: {{ $post->created_at}}</p>
	<p>Updated At: {{ $post->updated_at}}</p>
</div>
@endsection