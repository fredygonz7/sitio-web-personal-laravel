@extends('include/layout')

@section('title', 'Edit project')

@section('content')
    <h1>@lang('Edit project')</h1>
    
    @include('include.validation-errors')
    
    <form method="POST" action="{{ route('projects.update', $project) }}">
        @csrf @method('PATCH')
        <label for="">@lang('Title of the project')<input type="text" name="title" value="{{ old('title', $project->title) }}"></label>
        <br>
        <label for="">@lang('Url of the project')<input type="text" name="url" value="{{ old('url', $project->url) }}"></label>
        <br>
        <label for="">@lang('Description of the project')<textarea name="description">{{ old('description', $project->description) }}</textarea>
        <br>
        <button>@lang('Send')</button>
    </form>
@endsection