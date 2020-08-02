@extends('include/layout')

@section('title', 'Create new project')

@section('content')
    <h1>@lang('Create new project')</h1>
    
    @include('include.validation-errors')
    
    <form method="POST" action="{{ route('projects.store') }}">
        @include('projects._form', ['btnText' => __('Send')])
    </form>
@endsection