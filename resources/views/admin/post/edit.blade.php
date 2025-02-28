@extends('layouts.admin')

@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">

        <div class="wg-box">
            <h3>Edit Post: {{ $post->title }}</h3>
            <form class="form-new-product form-style-1" action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <fieldset class="name">
                    <label class="body-title">Title</label>
                    <input class="flex-grow" type="text" name="title" value="{{ $post->title }}" required>
                </fieldset>

                <fieldset class="name">
                    <label class="body-title">Image</label>
                    <input class="flex-grow" type="file" name="image" accept="image/*">
                </fieldset>

                <fieldset class="name">
                    <label class="body-title">Category</label>
                    <input class="flex-grow" type="text" name="category" value="{{ $post->category }}" required>
                </fieldset>

                <fieldset class="name">
                    <label class="body-title">Short Description</label>
                    <textarea class="flex-grow" name="short_description" required>{{ $post->short_description }}</textarea>
                </fieldset>

                <fieldset class="name">
                    <label class="body-title">Content</label>
                    <textarea class="flex-grow" name="content" required>{{ $post->content }}</textarea>
                </fieldset>

                <!-- New Fields for Arabic Content -->
                <fieldset class="name">
                    <label class="body-title">Title (AR)</label>
                    <input class="flex-grow" type="text" name="title_ar" value="{{ $post->title_ar }}">
                </fieldset>

                <fieldset class="name">
                    <label class="body-title">Short Description (AR)</label>
                    <textarea class="flex-grow" name="short_description_ar">{{ $post->short_description_ar }}</textarea>
                </fieldset>

                <fieldset class="name">
                    <label class="body-title">Content (AR)</label>
                    <textarea class="flex-grow" name="content_ar">{{ $post->content_ar }}</textarea>
                </fieldset>

                <div class="bot">
                    <div></div>
                    <button class="tf-button w208" type="submit">Update Post</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
