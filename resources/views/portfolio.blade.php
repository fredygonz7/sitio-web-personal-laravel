@extends('include/layout')

@section('title', 'Portfolio')

@section('content')
    <h1>Portfolio</h1>

    <ul>
        @forelse ($portfolio as $portfolioItem)
            <li>{{ $portfolioItem['title'] }}</li>
        @empty
            <li>No hay portafolios para mostrar</li>
        @endforelse
    </ul>

@endsection
