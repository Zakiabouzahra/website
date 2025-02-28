@extends('layouts.base')
@section('subPage', 'sub-page')
@section('activeProjects', 'active')
@section('content')
<div class="breadcumb-wrapper " data-bg-src="{{asset('assets/img/breadcumb/breadcumb-bg.jpg')}}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Projects</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home' , app()->getLocale()) }}">Home</a></li>
                    <li>Projects</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--==============================
Projects Wrapper
==============================-->
<section class=" space-top space-extra-bottom">
    <div class="container">
        <div class="row filter-active">
            @foreach ($projects as $project)
                <div class="col-md-6 col-xxl-auto filter-item">
                    <div class="project-style2">
                        <div class="project-img">
                            <div class="project-shape"></div>
                            <img src="{{ asset('storage/app/public/' . $project->image) }}" alt="project">
                            <a href="assets/img/project/p-2-1.jpg" class="icon-btn style4 popup-image"><i
                                    class="far fa-search"></i></a>
                        </div>
                        <div class="project-content">
                            <span class="project-label">{{ $project->short_description }}</span>
                            <h3 class="project-title h5"><a href="#">{{ $project->title }}</a></h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
