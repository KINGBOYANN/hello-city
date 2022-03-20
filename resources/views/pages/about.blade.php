@extends('layouts.app', ['title' => 'About Us'])

@section('content')

        <img src="{{ asset('images/sigleAB.jpg')}}" alt="Logo AB BOYANN" 
        class="my-12 rounded-full shadow-md">
        <h1>A propos de Moi</h1>

        <h2 class="mb-5 text-gray-700">Construire avec le <span class="text-pink-500">&hearts;</span> by KING BOYANN.</h2>
        <p><a href="{{ route('home') }}" class="text-indigo-500
                hover:text-indigo-600 underline">ACCUEIL</a></p>

        <p>Il est actuellement {{ date('h:i A') }}.</p>

@endsection
