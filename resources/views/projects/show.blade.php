@extends('include/layout')

@section('title', $project->title)

@section('content')
    <h1>{{ $project->title }}</h1>
    @auth
        <a href="{{ route('projects.edit', $project) }}">@lang('Edit')</a>
        <form method="POST" action="{{ route('projects.destroy', $project) }}">
            @csrf @method('DELETE')
            <Button>@lang('Delete')</Button>
        </form>
    @endauth
    <p>{{ $project->description }}</p>
    <p>{{ $project->created_at->diffForHumans() }}</p>
@endsection
