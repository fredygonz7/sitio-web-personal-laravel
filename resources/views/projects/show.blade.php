@extends('include/layout')

@section('title', $project->title)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-8 mx-auto">

                <div class="bg-white py-5 px-4 shadow rounded flex-row">
                    <h1 class="display-5">{{ $project->title }}</h1>
                    {{-- <p class="text-secondary">
                        {{ $project->description }}
                    </p> --}}
                    <textarea id="textarea-description" class="text-secondary border-0 col-12"
                        style="height: auto; padding: 1" readonly rows="2">{{ $project->description }}</textarea>
                    <a href="{{ $project->url }}">{{ $project->url }}</a>
                    <script>
                        let description = document.getElementById("textarea-description");
                        // let description_temporal = description.scrollHeight;
                        // window.addEventListener('resize', scroll_function);
                        // function scroll_function() {
                        //     description.style.cssText = 'height:' + (description.scrollHeight) + 'px';
                        // }
                        // console.log(description.scrollHeight);
                        if (description.scrollHeight > 63)
                            description.style.cssText = 'height:' + (description.scrollHeight + 23) + 'px';
                        console.log(description.scrollHeight);

                    </script>
                    <p class="text-black-50">
                        {{ $project->created_at->diffForHumans() }}
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('projects.index') }}">{{ __('Regresar') }}</a>
                        @auth
                            <div class="btn-group btn-group-sm">
                                <a class="btn btn-primary" href="{{ route('projects.edit', $project) }}">@lang('Edit')</a>

                                <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">
                                    @lang('Delete')
                                </a>

                            </div>
                            <form class="d-none" id="delete-project" method="POST"
                                action="{{ route('projects.destroy', $project) }}">
                                @csrf @method('DELETE')
                                {{-- <a class="btn btn-danger" href="#">@lang('Delete')</a>
                                --}}
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
