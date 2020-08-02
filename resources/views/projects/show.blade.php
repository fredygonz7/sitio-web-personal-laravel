@extends('include/layout')

@section('title', $project->title)

@section('content')
    <h1>{{ $project->title }}</h1>
    <a href="{{ route('projects.edit', $project) }}">@lang('Edit')</a>
    <p>{{ $project->description }}</p>
    <p>{{ $project->created_at }}</p>
@endsection