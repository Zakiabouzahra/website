@extends('layouts.admin')

@section('content')

<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Add Service</h3>
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
                    <a href="{{ route('admin.services.create') }}">
                        <div class="text-tiny">Services</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">New Service</div>
                </li>
            </ul>
        </div>

        <div class="wg-box">
            <form class="tf-section-2 form-add-product" action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <div class="body-title mb-10">Title (EN)</div>
                    <input class="flex-grow" type="text" name="title_en" required>
                </fieldset>
                <fieldset>
                    <div class="body-title mb-10">Title (AR)</div>
                    <input class="flex-grow" type="text" name="title_ar" required>
                </fieldset>

                <fieldset>
                    <div class="body-title mb-10">Short Description (EN)</div>
                    <input class="flex-grow" type="text" name="short_description_en" required>
                </fieldset>
                <fieldset>
                    <div class="body-title mb-10">Short Description (AR)</div>
                    <input class="flex-grow" type="text" name="short_description_ar" required>
                </fieldset>

                <fieldset>
                    <div class="body-title mb-10">Subtitle (EN)</div>
                    <input class="flex-grow" type="text" name="sub_title_en">
                </fieldset>
                <fieldset>
                    <div class="body-title mb-10">Subtitle (AR)</div>
                    <input class="flex-grow" type="text" name="sub_title_ar">
                </fieldset>



                <fieldset>
                    <div class="body-title mb-10">Service Feature 1 (EN)</div>
                    <input class="flex-grow" type="text" name="servives_feature1_en">
                </fieldset>
                <fieldset>
                    <div class="body-title mb-10">Service Feature 1 (AR)</div>
                    <input class="flex-grow" type="text" name="servives_feature1_ar">
                </fieldset>

                <fieldset>
                    <div class="body-title mb-10">Service Feature 2 (EN)</div>
                    <input class="flex-grow" type="text" name="servives_feature2_en">
                </fieldset>
                <fieldset>
                    <div class="body-title mb-10">Service Feature 2 (AR)</div>
                    <input class="flex-grow" type="text" name="servives_feature2_ar">
                </fieldset>

                <fieldset>
                    <div class="body-title mb-10">Service Feature 3 (EN)</div>
                    <input class="flex-grow" type="text" name="servives_feature3_en">
                </fieldset>
                <fieldset>
                    <div class="body-title mb-10">Service Feature 3 (AR)</div>
                    <input class="flex-grow" type="text" name="servives_feature3_ar">
                </fieldset>

                <fieldset>
                    <div class="body-title mb-10">Content (EN)</div>
                    <textarea name="content_en" required></textarea>
                </fieldset>
                <fieldset>
                    <div class="body-title mb-10">Content (AR)</div>
                    <textarea name="content_ar" required></textarea>
                </fieldset>

                <fieldset>
                    <div class="body-title mb-10">Category</div>
                    <select class="flex-grow" name="category_id" required>
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name_en }} ({{ $category->name_ar }})</option>
                        @endforeach
                    </select>
                </fieldset>


                <fieldset>
                    <div class="body-title mb-10">Image</div>
                    <input class="flex-grow" type="file" name="image" accept="image/*">
                </fieldset>
                <fieldset>
                    <div class="body-title mb-10">Additional Image (image2)</div>
                    <input class="flex-grow" type="file" name="image2" accept="image/*">
                </fieldset>
                <fieldset>
                    <div class="body-title mb-10">Banner Image</div>
                    <input class="flex-grow" type="file" name="banner_image" accept="image/*">
                </fieldset>

                <div class="bot">
                    <div></div>
                    <button class="tf-button w208" type="submit">Save Service</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
