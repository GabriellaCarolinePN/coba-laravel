@extends('layouts.main')

@section('container')    
    <h1 class="mb-5">{{ $post->title }}</h1>
    
    <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

    {!! $post->body !!}
    {{-- menggunakan {!! .. !!} berarti tidak melakukan escaping (yg di dalam elemen HTML akan dieksekusi termasuk paragraf, dll) --}}

    <a href="/posts" class="d-block mt-3">Back to Posts</a>
@endsection