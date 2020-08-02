@csrf
<label for="">@lang('Title of the project')
    <input type="text" name="title" value="{{ old('title', $project->title) }}">
</label>
<br>
<label for="">@lang('Url of the project')
    <input type="text" name="url" value="{{ old('url', $project->url) }}">
</label>
<br>
<label for="">@lang('Description of the project')
    <textarea name="description">{{ old('description', $project->description) }}</textarea>
<br>
<button>{{ $btnText }}</button>