@extends('include/layout')

@section('title', 'Edit project')

@section('content')
    <h1>@lang('Edit project')</h1>
    
    @include('include.validation-errors')
    
    <form method="POST" action="{{ route('projects.update', $project) }}">
        @method('PATCH')
        
        @include('projects._form', ['btnText' => __('Update')])
    </form>
@endsection