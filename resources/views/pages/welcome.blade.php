@extends('app')

@section('title','Bienvenu chez Moi'. config('app.name'))

@section('content')

        <img src="{{ asset('images/FlagCI.png')}}" alt="Drapeau de la Côte d\'Ivoire" class="mt-12 rounded shadow-md">
        <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600 h-32">Bonjour depuis Abidjan</h1>

        <p class="text-lg text-gray-800">Il est actuellement {{ date('h:i A') }}.</p>
@endsection