@extends('layouts.admin')

@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">

        <div class="wg-box">
            <h3>Edit Client: {{ $client->name_en }}</h3>
            <form class="form-new-product form-style-1" action="{{ route('admin.clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <fieldset>
                    <label>Name (EN)</label>
                    <input type="text" name="name_en" value="{{ $client->name_en }}" required>
                </fieldset>
                <fieldset>
                    <label>Name (AR)</label>
                    <input type="text" name="name_ar" value="{{ $client->name_ar }}" required>
                </fieldset>
                <fieldset>
                    <label>Logo</label>
                    <input type="file" name="logo" accept="image/*">
                    @if ($client->logo)
                        <img src="{{ asset('storage/app/public/' . $client->logo) }}" alt="Current Logo" style="max-width: 150px; margin-top: 10px;">
                    @endif
                </fieldset>

                <div class="bot">
                    <div></div>
                    <button class="tf-button w208" type="submit">Update Client</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
