@extends('layouts.admin')

@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Add Project</h3>
            <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                <li>
                    <a href="#">
                        <div class="text-tiny">Dashboard</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <a href="{{ route('admin.projects.index') }}">
                        <div class="text-tiny">Projects</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">New Project</div>
                </li>
            </ul>
        </div>
        <div class="wg-box">
            <form class="form-new-product form-style-1" action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <label class="body-title">Category</label>
                    <select class="flex-grow" name="category_id" required>
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name_en }} ({{ $category->name_ar }})</option>
                        @endforeach
                    </select>
                </fieldset>
                <fieldset>
                    <label class="body-title">Title</label>
                    <input class="flex-grow" type="text" name="title" required>
                </fieldset>
                <fieldset>
                    <label class="body-title">Location</label>
                    <input class="flex-grow" type="text" name="location" required>
                </fieldset>
                <fieldset>
                    <label class="body-title">Image</label>
                    <input class="flex-grow" type="file" name="image" accept="image/*" required>
                </fieldset>
                <fieldset>
                    <label class="body-title">End Date</label>
                    <input class="flex-grow" type="date" name="end_date" required>
                </fieldset>
                <fieldset>
                    <label class="body-title">Project Type</label>
                    <input class="flex-grow" type="text" name="project_type" required>
                </fieldset>
                <fieldset>
                    <label class="body-title">Short Description</label>
                    <input class="flex-grow" type="text" name="short_description" required>
                </fieldset>
                <fieldset>
                    <label class="body-title">Long Description</label>
                    <textarea name="long_description"></textarea>
                </fieldset>
                <div class="bot">
                    <div></div>
                    <button class="tf-button w208" type="submit">Save Project</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
