@extends('layouts.admin')

@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Add Clients</h3>
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
                    <a href="{{ route('admin.clients.index') }}">
                        <div class="text-tiny">Clients</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">New Client</div>
                </li>
            </ul>
        </div>
        <div class="wg-box">
            <form class="form-new-product form-style-1" action="{{ route('admin.clients.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <label  class="body-title">Name (EN)</label>
                    <input class="flex-grow" type="text" name="name_en" required>
                </fieldset>
                <fieldset>
                    <label  class="body-title">Name (AR)</label>
                    <input class="flex-grow" type="text" name="name_ar" required>
                </fieldset>
                <fieldset>
                    <label  class="body-title">Logo</label>
                    <input class="flex-grow" type="file" name="logo" accept="image/*" required>
                </fieldset>
                <button type="submit" class="tf-button">Save Client</button>
            </form>
        </div>
    </div>
</div>
@endsection
