@extends('include/layout')

@section('title', 'Create new project')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('projects.store') }}">

                    <h1 class="display-4">@lang('Create new project')</h1>
                    <hr>
                    @include('include.validation-errors')

                    {{-- @include('include.session-status') --}}

                    @include('projects._form', ['btnText' => __('Save')])
                </form>
            </div>
        </div>
    </div>
@endsection
