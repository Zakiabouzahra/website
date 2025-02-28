@extends('layouts.admin')

@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="wg-box">
            <h3>Edit Category: {{ $category->name_en }}</h3>
            <form class="form-new-product form-style-1" action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <fieldset>
                    <label class="body-title">Name (EN)</label>
                    <input  class="flex-grow" type="text" name="name_en" value="{{ $category->name_en }}" required>
                </fieldset>
                <fieldset>
                    <label class="body-title">Name (AR)</label>
                    <input  class="flex-grow" type="text" name="name_ar" value="{{ $category->name_ar }}" required>
                </fieldset>
                <fieldset>
                    <label class="body-title">Description (EN)</label>
                    <textarea class="flex-grow" name="description_en">{{ $category->description_en }}</textarea>
                </fieldset>
                <fieldset>
                    <label class="body-title">Description (AR)</label>
                    <textarea class="flex-grow" name="description_ar">{{ $category->description_ar }}</textarea>
                </fieldset>
                <div class="bot">
                    <div></div>
                    <button class="tf-button w208" type="submit">Update Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
