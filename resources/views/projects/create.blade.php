@extends('include/layout')

@section('title', 'Create new project')

@section('content')
    <h1>@lang('Create new project')</h1>
    
    @include('include.validation-errors')
    
    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <label for="">@lang('Title of the project')<input type="text" name="title" value="{{ old('title') }}"></label>
        <br>
        <label for="">@lang('Url of the project')<input type="text" name="url" value="{{ old('url') }}"></label>
        <br>
        <label for="">@lang('Description of the project')<textarea name="description">{{ old('description') }}</textarea>
        <br>
        <button>@lang('Send')</button>
    </form>
@endsection