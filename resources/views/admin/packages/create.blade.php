@extends('layouts.admin')

@section('content')

<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Add Packages</h3>
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
                    <a href="{{ route('admin.packages.index') }}">
                        <div class="text-tiny">Packages</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">New Packages</div>
                </li>
            </ul>
        </div>

        <div class="wg-box">
            <form class="tf-section-2 form-add-product"  action="{{ route('admin.packages.store') }}" method="POST">
                @csrf
                <fieldset>
                    <label  class="body-title mb-10">Title (EN)</label>
                    <input class="flex-grow" type="text" name="title_en" required>
                </fieldset>
                <fieldset>
                    <label  class="body-title mb-10">Title (AR)</label>
                    <input class="flex-grow" type="text" name="title_ar" required>
                </fieldset>
                <fieldset>
                    <label  class="body-title mb-10">Price</label>
                    <input class="flex-grow" type="number" step="0.01" name="price" required>
                </fieldset>
                <fieldset>
                </fieldset>
                <fieldset>
                    <label  class="body-title mb-10">Item 1 (EN)</label>
                    <input class="flex-grow" type="text" name="item1" required>
                </fieldset>
                <fieldset>
                    <label  class="body-title mb-10">Item 1 (AR)</label>
                    <input class="flex-grow" type="text" name="item1_ar" required>
                </fieldset>
                <fieldset>
                    <label  class="body-title mb-10">Item 2 (EN)</label>
                    <input class="flex-grow" type="text" name="item2" required>
                </fieldset>
                <fieldset>
                    <label  class="body-title mb-10">Item 2 (AR)</label>
                    <input class="flex-grow" type="text" name="item2_ar" required>
                </fieldset>
                <fieldset>
                    <label  class="body-title mb-10">Item 3 (EN)</label>
                    <input class="flex-grow" type="text" name="item3" required>
                </fieldset>
                <fieldset>
                    <label  class="body-title mb-10">Item 3 (AR)</label>
                    <input class="flex-grow" type="text" name="item3_ar" required>
                </fieldset>
                <fieldset>
                    <label  class="body-title mb-10">Item 4 (EN)</label>
                    <input class="flex-grow" type="text" name="item4" required>
                </fieldset>
                <fieldset>
                    <label  class="body-title mb-10">Item 4 (AR)</label>
                    <input class="flex-grow" type="text" name="item4_ar" required>
                </fieldset>
                <div class="bot">
                    <div></div>
                    <button class="tf-button w208" type="submit">Save Package</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
