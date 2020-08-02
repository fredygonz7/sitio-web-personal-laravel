@extends('include/layout')

@section('title', 'Create new project')

@section('content')
    <h1>@lang('Create new project')</h1>
    
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <label for="">@lang('Title of the project')<input type="text" name="title"></label>
        <br>
        <label for="">@lang('Url of the project')<input type="text" name="url"></label>
        <br>
        <label for="">@lang('Description of the project')<textarea name="description"></textarea>
        <br>
        <button>@lang('Send')</button>
    </form>
@endsection