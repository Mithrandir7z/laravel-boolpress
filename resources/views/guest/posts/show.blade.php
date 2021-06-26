@extends('layouts.app')

@section('content')
    <div class="container">

        {{dd($post->category)}}
        <div class="mt-2 mb-2">Categoria: {{ $post->category }}</div>
        

        <h1>{{ $post->title }}</h1>

        <p>{{ $post->content }}</p>

    </div>
@endsection