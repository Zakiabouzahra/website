@extends('layouts.admin')

@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">

        <div class="wg-box">
            <h3>Edit Package: {{ $package->title_en }}</h3>
            <form class="tf-section-2 form-add-product" action="{{ route('admin.packages.update', $package->id) }}" method="POST">
                @csrf
                @method('PUT')
                <fieldset>
                    <label class="body-title mb-10">Title (EN)</label>
                    <input type="text" name="title_en" value="{{ $package->title_en }}" required>
                </fieldset>
                <fieldset>
                    <label class="body-title mb-10">Title (AR)</label>
                    <input type="text" name="title_ar" value="{{ $package->title_ar }}" required>
                </fieldset>
                <fieldset>
                    <label class="body-title mb-10">Price</label>
                    <input type="number" step="0.01" name="price" value="{{ $package->price }}" required>
                </fieldset>
                <fieldset>
                </fieldset>
                <fieldset>
                    <label class="body-title mb-10">Item 1 (EN)</label>
                    <input type="text" name="item1" value="{{ $package->item1 }}">
                </fieldset>
                <fieldset>
                    <label class="body-title mb-10">Item 1 (AR)</label>
                    <input type="text" name="item1_ar" value="{{ $package->item1_ar }}">
                </fieldset>
                <fieldset>
                    <label class="body-title mb-10">Item 2 (EN)</label>
                    <input type="text" name="item2" value="{{ $package->item2 }}">
                </fieldset>
                <fieldset>
                    <label class="body-title mb-10">Item 2 (AR)</label>
                    <input type="text" name="item2_ar" value="{{ $package->item2_ar }}">
                </fieldset>
                <fieldset>
                    <label class="body-title mb-10">Item 3 (EN)</label>
                    <input type="text" name="item3" value="{{ $package->item3 }}">
                </fieldset>
                <fieldset>
                    <label class="body-title mb-10">Item 3 (AR)</label>
                    <input type="text" name="item3_ar" value="{{ $package->item3_ar }}">
                </fieldset>
                <fieldset>
                    <label class="body-title mb-10">Item 4 (EN)</label>
                    <input type="text" name="item4" value="{{ $package->item4 }}">
                </fieldset>
                <fieldset>
                    <label class="body-title mb-10">Item 4 (AR)</label>
                    <input type="text" name="item4_ar" value="{{ $package->item4_ar }}">
                </fieldset>
                <button type="submit" class="tf-button">Update Package</button>
            </form>
        </div>
    </div>
</div>
@endsection
