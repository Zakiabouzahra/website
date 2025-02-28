@extends('layouts.admin')

@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="wg-box">
        <h3>Edit Project: {{ $project->title }}</h3>

            <form class="form-new-product form-style-1" action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <fieldset>
                    <label class="body-title">Category</label>
                    <select name="category_id" required>
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ ($project->category_id == $category->id) ? 'selected' : '' }}>
                            {{ $category->name_en }} ({{ $category->name_ar }})
                        </option>
                    @endforeach
                </select>
            </fieldset>
            <fieldset>
                <label class="body-title">Title</label>
                <input class="flex-grow" type="text" name="title" value="{{ $project->title }}" required>
            </fieldset>
            <fieldset>
                <label class="body-title">Location</label>
                <input class="flex-grow" type="text" name="location" value="{{ $project->location }}" required>
            </fieldset>
            <fieldset>
                <label class="body-title">Image</label>
                <input class="flex-grow" type="file" name="image" accept="image/*">
                @if ($project->image)
                    <img src="{{ asset('storage/app/public/' . $project->image) }}" alt="Current Image" style="max-width: 150px; margin-top: 10px;">
                @endif
            </fieldset>
            <fieldset>
                <label class="body-title">End Date</label>
                <input class="flex-grow" type="date" name="end_date" value="{{ $project->end_date->format('Y-m-d') }}" required>
            </fieldset>
            <fieldset>
                <label class="body-title">Project Type</label>
                <input class="flex-grow" type="text" name="project_type" value="{{ $project->project_type }}" required>
            </fieldset>
            <fieldset>
                <label class="body-title">Short Description</label>
                <input class="flex-grow" type="text" name="short_description" value="{{ $project->short_description }}" required>
            </fieldset>
            <fieldset>
                <label class="body-title">Long Description</label>
                <textarea name="long_description">{{ $project->long_description }}</textarea>
            </fieldset>
            <button type="submit" class="tf-button">Update Project</button>
        </form>
    </div>
</div>
</div>
@endsection
