@extends('layouts.admin')

@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Add Category</h3>
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
                    <a href="{{ route('admin.categories.index') }}">
                        <div class="text-tiny">Categories</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">New Category</div>
                </li>
            </ul>
        </div>
        <div class="wg-box">
            <form class="form-new-product form-style-1" action="{{ route('admin.categories.store') }}" method="POST">
                @csrf
                <fieldset>
                    <div  class="body-title">Name (EN)</div>
                    <input class="flex-grow" type="text" name="name_en" required>
                </fieldset>
                <fieldset>
                    <div  class="body-title">Name (AR)</div>
                    <input class="flex-grow" type="text" name="name_ar" required>
                </fieldset>
                <fieldset>
                    <div  class="body-title">Description (EN)</div>
                    <textarea class="flex-grow" name="description_en"></textarea>
                </fieldset>
                <fieldset>
                    <div  class="body-title">Description (AR)</div>
                    <textarea class="flex-grow" name="description_ar"></textarea>
                </fieldset>

                <div class="bot">
                    <div></div>
                    <button class="tf-button w208" type="submit">Save Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
