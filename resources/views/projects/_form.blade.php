@csrf

<div class="form-group">
    <label for="title">@lang('Title of the project')</label>
    <input type="text" name="title" id="title" class="form-control" placeholder="@lang('Title of the project') ..."
        aria-describedby="helpIdtitle" value="{{ old('title', $project->title) }}">
</div>

<div class="form-group">
    <label for="url">{{ __('Url of the project') }}</label>
    <input type="text" name="url" id="url" class="form-control" placeholder="{{ __('Url of the project') }}..."
        aria-describedby="helpIdurl" value="{{ old('url', $project->url) }}">
</div>

<div class="form-group">
    <label for="description">{{ __('Description of the project') }}</label>
    <textarea name="description" id="description" class="form-control"
        placeholder="{{ __('Description of the project') }}..." rows="3">{{ old('description', $project->description) }}</textarea>
</div>

{{-- <label for="">@lang('Title')
    <input type="text" name="title" value="{{ old('title', $project->title) }}">
</label> --}}
{{--
<br>
<label for="">@lang('Url of the project')
    <input type="text" name="url" value="{{ old('url', $project->url) }}">
</label>
<br> --}}
{{-- <label for="">@lang('Description of the project')
    <textarea name="description">{{ old('description', $project->description) }}</textarea>
    <br> --}}
    <button type="submit" class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
    <a class="btn btn-link btn-block" href="{{ route('projects.index') }}">{{ __('Cancel') }}</a>
    {{-- <button>{{ $btnText }}</button> --}}
