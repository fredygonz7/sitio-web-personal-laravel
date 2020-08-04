@extends('include/layout')

@section('title', 'Projects')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            
            <h1 class="display-4 mb-0">@lang('Projects')</h1>

            @auth
                <a class="btn btn-primary" href="{{ route('projects.create') }}">@lang('Create project')</a>
            @endauth
        </div>
        <p class="lead text-secondary text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam ipsa
            soluta rerum ab sequi eum voluptatum dicta iste sunt, magni hic quasi itaque eligendi dolores laborum,
            distinctio deleniti voluptates nostrum?</p>

        <ul class="list-group">
            @forelse ($projects as $projectItem)
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    <a class="d-flex text-secondary justify-content-between align-item-center"
                        href="{{ route('projects.show', $projectItem) }}">
                        <span class="font-weight-bold">
                            {{ $projectItem->title }}
                        </span>
                        <span class="text-black-50">
                            {{ $projectItem->created_at->format('Y/m/d') }}
                        </span>
                    </a>
                    {{-- <br> {{ $projectItem->description }}
                    <br> {{ $projectItem->updated_at->format('y-m-d') }}
                    <br> {{ $projectItem->updated_at->diffForHumans() }} --}}
                </li>
            @empty
                <li lass="list-group-item border-0 mb-3 shadow-sm">
                    @lang('There are no projects to show')
                </li>
            @endforelse
            {{ $projects->links() }}
        </ul>
    </div>
@endsection
