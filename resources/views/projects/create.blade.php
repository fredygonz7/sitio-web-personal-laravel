@extends('include/layout')

@section('title', 'Create new project')

@section('content')
    <h1>@lang('Create new project')</h1>
    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <label for="">Title del proyecto<input type="text" name="title"></label>
        <br>
        <label for="">Url del proyecto<input type="text" name="url"></label>
        <br>
        <label for="">Description del proyecto<textarea name="description"></textarea>
        <br>
        <button>enviar</button>
    </form>
@endsection