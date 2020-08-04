@extends('include/layout')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-6 mx-auto mb-4">

                <h1 class="display-4 text-primary">@lang('Developer full stack')</h1>
                <div class="lead text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. A quos dolore,
                    dignissimos magnam vel, libero doloribus minima quo ipsa nam eaque. Modi rem labore qui molestias illum
                    minus, sit impedit?</div>

                <a href="{{ route('contact') }}" class="btn btn-lg btn-block btn-primary">
                    @lang('Contact me')
                </a>
                <a href="{{ route('projects.index') }}" class="btn btn-lg btn-block btn-outline-primary">
                    @lang('Portfolio')
                </a>
                {{-- @auth
                {{ auth()->user()->name }}
                @endauth --}}
            </div>
            <div class="col-12 col-md-10 col-lg-6 mx-auto">
            <img src="/img/home-ilustration.svg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="{{ __('Developer') }} img">
            </div>
        </div>
    </div>
@endsection
