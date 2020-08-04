@extends('include/layout')

@section('title', 'Contact')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <div class="bg-white shadow rounded py-3 px-4 my-3">

                    <h1 class="display-4">@lang('Contact')</h1>
                    <hr>
                    @if (session('status'))
                        <p class="pb-3">{{ __('I received your message, I will reply to you as soon as possible') }}</p>
                        
                        <a class="btn btn-link btn-block" href="{{ route('home') }}">{{ __('Home') }}</a>
                    @else
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            {{-- class="bg-white shadow rounded py-3 px-4 my-3">
                            @csrf

                            <h1 class="display-4">@lang('Contact')</h1>
                            <hr> --}}
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text" name="name" id="name" class="form-control
                                            @error('name')
                                                is-invalid
                                        {{-- @else
                                                en la clase input add 'bg-ligth shadow-sm'
                                                border-0 --}}
                                            @enderror" 
                                        placeholder="{{ __('Name') }}..." aria-describedby="helpIdName"
                                    value="{{ old('name') }}">

                                @error('name')
                                    <span class="text-muted" id="helpIdName" role="alert"> {{--"invalid-feedback" clase texto rojo--}}
                                        {{ $message }}
                                    </span>
                                @enderror
                                {{-- <small id="helpIdName" class="text-muted"> /*escaped*/{!!
                                    ?>$errors->first('name', ':message') !!}</small>
                                --}}
                            </div>
                            {{-- <div>
                                <input type="text" name="name" placeholder="name..." value="{{ old('name') }}">
                                {!! $errors->first('name', '<small>:message</small>') !!}
                            </div> --}}

                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <input type="text" name="email" id="email" 
                                    class="form-control {!!  $errors->first('email', 'is-invalid') !!}" 
                                    placeholder="{{ __('Email') }}..."
                                    aria-describedby="helpIdEmail" value="{{ old('email') }}">
                                {!! $errors->first('email', '<span id="helpIdEmail" class="text-muted">:message</span>')
                                !!}
                            </div>

                            <div class="form-group">
                                <label for="subject">{{ __('Subject') }}</label>
                                <input type="text" name="subject" id="subject" class="form-control
                                            @error('subject')
                                                is-invalid
                                            @enderror" placeholder="{{ __('Subject') }}..."
                                    aria-describedby="helpIdSubject" value="{{ old('subject') }}">
                                <span id="helpIdSubject" class="text-muted">
                                    @error('subject')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="content">{{ __('Content') }}</label>
                                <textarea class="form-control 
                                    @error('content')
                                        is-invalid
                                    @enderror" 
                                    name="content" id="content" rows="3"
                                    placeholder="{{ __('Content') }}..."
                                    aria-describedby="helpIdContent">{{ old('content') }}</textarea>
                                {{-- <input type="text" name="subject" id="subject"
                                    class="form-control" placeholder="{{ __('Subject') }}..."
                                    aria-describedby="helpIdSubject" value="{{ old('subject') }}" required>
                                --}}
                                <span id="helpIdContent" class="text-muted">
                                    @error('content')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            {{-- <div>
                                <textarea name="content" rows="3" placeholder="Mensaje...">{{ old('content') }}</textarea>
                                {!! $errors->first('content', '<small>:message</small>') !!}
                            </div> --}}
                            {{-- <button class="pr">@lang('Send')</button>
                            --}}
                            <button type="submit" class="btn btn-primary btn-lg btn-block">@lang('Send')</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
