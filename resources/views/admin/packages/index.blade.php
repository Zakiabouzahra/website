@extends('layouts.admin')

@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>All Packages</h3>
            <a class="tf-button style-1" href="{{ route('admin.packages.create') }}">Add New Package</a>
        </div>

        <div class="wg-box">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title (EN)</th>
                            <th>Title (AR)</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($packages as $package)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $package->title_en }}</td>
                            <td>{{ $package->title_ar }}</td>
                            <td>AED{{ number_format($package->price, 2) }}</td>
                            <td>
                                <a href="{{ route('admin.packages.edit', $package->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.packages.destroy', $package->id) }}" method="POST" style="display:inline-block;">
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
