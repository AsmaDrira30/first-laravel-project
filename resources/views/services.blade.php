@extends('layouts.app')

@section('title', 'Services')

@section('styles')
<style>
    .service {
        background: white;
        padding: 20px;
        margin: 15px 0;
        border: 2px solid #483792;
        border-radius: 10px;
    }
</style>
@endsection

@section('content')

<h1>Nos Services</h1>

@foreach ($services as $service)
    <div class="service">
        <h3>{{ $service['nom'] }}</h3>
        <p><strong>Prix :</strong> {{ $service['prix'] }}</p>
    </div>
@endforeach

@endsection