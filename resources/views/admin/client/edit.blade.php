@extends('layouts.admin')

@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <h3>Edit Client: {{ $client->name }}</h3>
        <div class="wg-box">
            <form action="{{ route('admin.clients.update', $client->id) }}" method="POST">
                @csrf
                @method('PUT')
                <fieldset class="name">
                    <label>Name</label>
                    <input type="text" name="name" value="{{ $client->name }}" required>
                </fieldset>
                <fieldset class="name">
                    <label>Phone</label>
                    <input type="text" name="phone" value="{{ $client->phone }}" required>
                </fieldset>
                <fieldset class="name">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ $client->email }}" required>
                </fieldset>
                <fieldset class="name">
                    <label>Address</label>
                    <input type="text" name="address" value="{{ $client->address }}" required>
                </fieldset>
                <fieldset class="name">
                    <label>Authorized Person</label>
                    <input type="text" name="authorized_person" value="{{ $client->authorized_person }}" required>
                </fieldset>
                <fieldset class="name">
                    <label>Description</label>
                    <textarea name="description">{{ $client->description }}</textarea>
                </fieldset>
                <button type="submit" class="tf-button">Update Client</button>
            </form>
        </div>
    </div>
</div>
@endsection
