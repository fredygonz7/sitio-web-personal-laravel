@extends('include/layout')

@section('title', 'Portfolio')

@section('content')
    <h1>@lang('Portfolio')</h1>

    <ul>
        @forelse ($projects as $projectItem)
        <li> <a href="{{ route('projects.show', $projectItem) }}">{{ $projectItem->title }} </a>
                {{-- <br> {{ $projectItem->description }}
                <br> {{ $projectItem->updated_at->format('y-m-d') }}
                <br> {{ $projectItem->updated_at->diffForHumans() }} --}}
            </li>
        @empty
            <li>@lang('There are no projects to show')</li>
        @endforelse
        {{ $projects->links() }}
    </ul>

@endsection
