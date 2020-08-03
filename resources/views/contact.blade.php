@extends('include/layout')

@section('title', 'Contact')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                @if (session('status'))
                    <p>{{ session('status') }}</p>
                @else
                    <form action="{{ route('contact.store') }}" method="POST" 
                    class="bg-white shadow rounded py-3 px-4 my-3">
                        @csrf
                        
                        <h1 class="display-4">@lang('Contact')</h1>
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input type="text" name="name" id="name" class="form-control bg-ligth shadow-sm
                            @error('name')
                                is-invalid
                        @else
                                border-0
                            @enderror" placeholder="{{ __('Name') }}..." aria-describedby="helpIdName"
                                value="{{ old('name') }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            {{-- <small id="helpIdName" class="text-muted">{!!  $errors->first('name', ':message') !!}</small> --}}
                        </div>
                        {{-- <div>
                        <input type="text" name="name" placeholder="name..." value="{{ old('name') }}">
                        {!!  $errors->first('name', '<small>:message</small>') !!}
                    </div> --}}

                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input type="text" name="email" id="email" class="form-control"
                                placeholder="{{ __('Email') }}..." aria-describedby="helpIdEmail"
                                value="{{ old('email') }}">
                            {!! $errors->first('email', '<small id="helpIdEmail" class="text-muted">:message</small>') !!}
                        </div>

                        <div class="form-group">
                            <label for="subject">{{ __('Subject') }}</label>
                            <input type="text" name="subject" id="subject" class="form-control"
                                placeholder="{{ __('Subject') }}..." aria-describedby="helpIdSubject"
                                value="{{ old('subject') }}">
                            <small id="helpIdSubject" class="text-muted">{!! $errors->first('subject', ':message')
                                !!}</small>
                        </div>


                        <div class="form-group">
                            <label for="content">{{ __('Content') }}</label>
                            <textarea class="form-control" name="content" id="content" rows="3"
                                placeholder="{{ __('Content') }}..."
                                aria-describedby="helpIdContent">{{ old('content') }}</textarea>
                            {{-- <input type="text" name="subject" id="subject" class="form-control" placeholder="{{ __('Subject') }}..."
                                            aria-describedby="helpIdSubject" value="{{ old('subject') }}" required> --}}
                            <small id="helpIdContent" class="text-muted">
                                @error('content')
                                {{ $message }}
                                @enderror
                            </small>
                        </div>

                        {{-- <div>
                        <textarea name="content" rows="3" placeholder="Mensaje...">{{ old('content') }}</textarea>
                        {!!  $errors->first('content', '<small>:message</small>') !!}
                    </div> --}}
                        {{-- <button class="pr">@lang('Send')</button> --}}
                        <button type="button" class="btn btn-primary btn-lg btn-block">@lang('Send')</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
