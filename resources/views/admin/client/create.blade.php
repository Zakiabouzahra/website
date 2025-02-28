@extends('layouts.admin')

@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Add New Client</h3>
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
                    <a href="#">
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
            <form class="form-new-product form-style-1" action="{{ route('admin.clients.store') }}" method="POST">
                @csrf
                <fieldset class="name">
                    <label class="body-title" >Name</label>
                    <input class="flex-grow" type="text" name="name" required>
                </fieldset>
                <fieldset class="name">
                    <label class="body-title" >Phone</label>
                    <input class="flex-grow" type="text" name="phone" required>
                </fieldset>
                <fieldset class="name">
                    <label class="body-title" >Email</label>
                    <input class="flex-grow" type="email" name="email" required>
                </fieldset>
                <fieldset class="name">
                    <label class="body-title" >Address</label>
                    <input class="flex-grow" type="text" name="address" required>
                </fieldset>
                <fieldset class="name">
                    <label class="body-title" >Authorized Person</label>
                    <input class="flex-grow" type="text" name="authorized_person" required>
                </fieldset>
                <fieldset class="name">
                    <label class="body-title" >Description</label>
                    <textarea name="description"></textarea>
                </fieldset>
                <button type="submit" class="tf-button">Save Client</button>
            </form>
        </div>
    </div>
</div>
@endsection
