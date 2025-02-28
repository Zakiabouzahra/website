@extends('layouts.admin')

@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap-20 mb-27">
            <h3>Add New Post</h3>
            <ul class="breadcrumbs flex items-center flex-wrap justify-start gap-10">
                <li>
                    <a href="{{ route('admin.index') }}">
                        <div class="text-tiny">Dashboard</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <a href="{{ route('admin.posts.index') }}">
                        <div class="text-tiny">Posts</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">New Post</div>
                </li>
            </ul>
        </div>

        <div class="wg-box">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form class="form-new-product form-style-1" action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="body-title" for="title">Title</label>
                    <input class="flex-grow" type="text" name="title" id="title" required>
                </div>

                <div class="form-group">
                    <label class="body-title" for="image">Image</label>
                    <input class="flex-grow" type="file" name="image" id="image" accept="image/*">
                </div>

                <div class="form-group">
                    <label class="body-title" for="category">Category</label>
                    <input class="flex-grow" type="text" name="category" id="category" required>
                </div>

                <div class="form-group">
                    <label class="body-title" for="short_description">Short Description</label>
                    <textarea class="flex-grow" name="short_description" id="short_description" required></textarea>
                </div>

                <div class="form-group">
                    <label class="body-title" for="content">Content</label>
                    <textarea class="flex-grow" name="content" id="content" required></textarea>
                </div>

                <!-- New Fields for Arabic Content -->
                <div class="form-group">
                    <label class="body-title" for="title_ar">Title (AR)</label>
                    <input class="flex-grow" type="text" name="title_ar" id="title_ar">
                </div>

                <div class="form-group">
                    <label class="body-title" for="short_description_ar">Short Description (AR)</label>
                    <textarea class="flex-grow" name="short_description_ar" id="short_description_ar"></textarea>
                </div>

                <div class="form-group">
                    <label class="body-title" for="content_ar">Content (AR)</label>
                    <textarea class="flex-grow" name="content_ar" id="content_ar"></textarea>
                </div>

                <button type="submit" class="tf-button">Save Post</button>
            </form>
        </div>
    </div>
</div>
@endsection
