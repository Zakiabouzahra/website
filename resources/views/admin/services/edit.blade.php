@extends('layouts.admin')

@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">

        <div class="wg-box">
            <h3>Edit Service: {{ $service->title_en }}</h3>
            <form class="tf-section-2 form-add-product" action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <fieldset>
                    <div class="body-title mb-10">Title (EN)</div>
                    <input class="flex-grow" type="text" name="title_en" value="{{ $service->title_en }}" required>
                </fieldset>
                <fieldset>
                    <div class="body-title mb-10">Title (AR)</div>
                    <input class="flex-grow" type="text" name="title_ar" value="{{ $service->title_ar }}" required>
                </fieldset>
                <fieldset>
                    <div class="body-title mb-10">Short Description (EN)</div>
                    <input class="flex-grow" type="text" name="short_description_en" value="{{ $service->short_description_en }}" required>
                </fieldset>
                <fieldset>
                    <div class="body-title mb-10">Short Description (AR)</div>
                    <input class="flex-grow" type="text" name="short_description_ar" value="{{ $service->short_description_ar }}" required>
                </fieldset>

                <fieldset>
                    <div class="body-title mb-10">Subtitle (EN)</div>
                    <input class="flex-grow" type="text" name="sub_title_en" value="{{ $service->sub_title_en }}">
                </fieldset>
                <fieldset>
                    <div class="body-title mb-10">Subtitle (AR)</div>
                    <input class="flex-grow" type="text" name="sub_title_ar" value="{{ $service->sub_title_ar }}">
                </fieldset>

                <fieldset>
                    <div class="body-title mb-10">Service Feature 1 (EN)</div>
                    <input class="flex-grow" type="text" name="servives_feature1_en" value="{{ $service->servives_feature1_en }}">
                </fieldset>
                <fieldset>
                    <div class="body-title mb-10">Service Feature 1 (AR)</div>
                    <input class="flex-grow" type="text" name="servives_feature1_ar" value="{{ $service->servives_feature1_ar }}">
                </fieldset>
                <fieldset>
                    <div class="body-title mb-10">Service Feature 2 (EN)</div>
                    <input class="flex-grow" type="text" name="servives_feature2_en" value="{{ $service->servives_feature2_en }}">
                </fieldset>
                <fieldset>
                    <div class="body-title mb-10">Service Feature 2 (AR)</div>
                    <input class="flex-grow" type="text" name="servives_feature2_ar" value="{{ $service->servives_feature2_ar }}">
                </fieldset>
                <fieldset>
                    <div class="body-title mb-10">Service Feature 3 (EN)</div>
                    <input class="flex-grow" type="text" name="servives_feature3_en" value="{{ $service->servives_feature3_en }}">
                </fieldset>
                <fieldset>
                    <div class="body-title mb-10">Service Feature 3 (AR)</div>
                    <input class="flex-grow" type="text" name="servives_feature3_ar" value="{{ $service->servives_feature3_ar }}">
                </fieldset>

                <fieldset>
                    <div class="body-title mb-10">Content (EN)</div>
                    <textarea name="content_en" required>{{ $service->content_en }}</textarea>
                </fieldset>
                <fieldset>
                    <div class="body-title mb-10">Content (AR)</div>
                    <textarea name="content_ar" required>{{ $service->content_ar }}</textarea>
                </fieldset>

                <fieldset>
                    <div class="body-title mb-10">Category</div>
                    <select name="category_id" required>
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ ($service->category_id == $category->id) ? 'selected' : '' }}>
                                {{ $category->name_en }} ({{ $category->name_ar }})
                            </option>
                        @endforeach
                    </select>
                </fieldset>



                <fieldset>
                    <div class="body-title mb-10">Image</div>
                    <input class="flex-grow" type="file" name="image" accept="image/*">
                    @if ($service->image)
                        <img src="{{ asset('storage/app/public/' . $service->image) }}" alt="Current Image" style="max-width: 150px; margin-top: 10px;">
                    @endif
                </fieldset>
                <fieldset>
                    <div class="body-title mb-10">Additional Image (image2)</div>
                    <input class="flex-grow" type="file" name="image2" accept="image/*">
                    @if ($service->image2)
                        <img src="{{ asset('storage/app/public/' . $service->image2) }}" alt="Current Additional Image" style="max-width: 150px; margin-top: 10px;">
                    @endif
                </fieldset>
                <fieldset>
                    <div class="body-title mb-10">Banner Image</div>
                    <input type="file" name="banner_image" accept="image/*">
                    @if ($service->banner_image)
                        <img src="{{ asset('storage/app/public/' . $service->banner_image) }}" alt="Current Banner Image" style="max-width: 150px; margin-top: 10px;">
                    @endif
                </fieldset>



                <button type="submit" class="tf-button">Update Service</button>
            </form>
        </div>
    </div>
</div>
@endsection
