@extends('layouts.app')

@section('title', 'Blog')

@section('styles')
<style>
    .article {
        background: #f9f9f9;
        padding: 20px;
        margin: 15px 0;
        border-left: 5px solid #FF2D20;
        border-radius: 8px;
    }
</style>
@endsection

@section('content')

<h1>Notre Blog</h1>

@foreach ($articles as $article)
    <div class="article">
        <h3>{{ $article['titre'] }}</h3>
        <p>{{ $article['contenu'] }}</p>
    </div>
@endforeach

@endsection