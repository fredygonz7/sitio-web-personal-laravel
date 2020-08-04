@extends('include/layout')

@section('title', 'Edit project')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <div class="bg-white py-3 px-4 shadow rounded">
                    <h1 class="display-4">@lang('Edit project')</h1>
                    <hr>
                    @include('include.validation-errors')

                    <form method="POST" action="{{ route('projects.update', $project) }}">
                        @method('PATCH')

                        @include('projects._form', ['btnText' => __('Update')])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
