@extends('include/layout')

@section('title', 'Contact')

@section('content')
    <h1>@lang('Contact')</h1>
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="name" placeholder="name..." value="{{ old('name') }}">
            {!! $errors->first('name', '<small>:message</small>') !!}
        </div>
        <div>
            <input type="email" name="email" placeholder="email..." value="{{ old('email') }}">
            {!! $errors->first('email', '<small>:message</small>') !!}
        </div>
        <div>
            <input type="text" name="subject" placeholder="Asunto..." value="{{ old('subject') }}">
            {!! $errors->first('subject', '<small>:message</small>') !!}
        </div>
        <div >
            <textarea name="content" rows="3" placeholder="Mensaje...">{{ old('content') }}</textarea>
            {!! $errors->first('content', '<small>:message</small>') !!}
        </div>
        <button>@lang('Send')</button>
    </form>
@endsection
