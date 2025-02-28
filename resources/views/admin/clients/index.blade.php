@extends('layouts.admin')

@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>All Clients</h3>
            <a class="tf-button style-1" href="{{ route('admin.clients.create') }}">Add New Client</a>
        </div>
        <div class="wg-box">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name (EN)</th>
                            <th>Name (AR)</th>
                            <th>Logo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $client->name_en }}</td>
                            <td>{{ $client->name_ar }}</td>
                            <td>
                                @if ($client->logo)
                                    <img src="{{ asset('storage/app/public/' . $client->logo) }}" alt="{{ $client->name_en }}" style="max-width: 50px;">
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.clients.edit', $client->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.clients.destroy', $client->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
