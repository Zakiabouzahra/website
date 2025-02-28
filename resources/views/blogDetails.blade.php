@extends('layouts.base')
@section('subPage', 'sub-page')
@section('activeBlog', 'active')
@section('content')

<div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Blog Details</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home' , app()->getLocale()) }}">Home</a></li>
                    <li>Blog Details</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--==============================
    Blog Area
==============================-->
<section class="vs-blog-wrapper blog-details space-top space-extra-bottom">
    <div class="container">
        <div class="row gx-40">
            <div class="col-lg-8">
                <div class="vs-blog blog-single">
                    <div class="blog-img">
                        <img src="{{ asset('storage/app/public/' . $posts->image) }}" alt="Blog Image">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="{{ route('blog' , app()->getLocale()) }}"><i class="far fa-calendar"></i>{{ $posts->created_at->format('d M Y') }}</a>
                            <a href="{{ route('blog' , app()->getLocale()) }}"><i class="fal fa-user"></i>CIC</a>
                        </div>
                        <h2 class="blog-title">{{ app()->getLocale() === 'ar' ? $posts->title_ar : $posts->title }}</h2>
                        <p>{{ app()->getLocale() === 'ar' ? $posts->short_description_ar : $posts->short_description }}</p>

                        <p>{{ app()->getLocale() === 'ar' ? $posts->content_ar : $posts->content }}</p>

                    </div>
                    <div class="share-links clearfix  ">
                        <div class="row justify-content-between">

                            <div class="col-auto text-end">
                                <span class="share-links-title">Social Icon</span>
                                <ul class="social-links">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                                </ul><!-- End Social Share -->
                            </div><!-- Share Links Area end -->
                        </div>
                    </div> <!-- Post Pagination Style -->

                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area">
                    <div class="widget widget_search   ">
                        <form class="search-form">
                            <input type="text" placeholder="Search Here">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget  ">
                        <h3 class="widget_title">Recent Posts</h3>
                        <div class="recent-post-wrap">
                            @foreach ($recentPosts as $recentPost)
                            <div class="recent-post">
                                <div class="media-img">
                                    <a><img src="{{ asset('storage/app/public/' . $recentPost->image) }}"
                                            alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title">
                                        <a class="text-inherit" href="{{ route('showPost', ['locale' => app()->getLocale(), 'id' => $recentPost->id]) }}">{{ app()->getLocale() === 'ar' ? $recentPost->title_ar : $recentPost->title }}</a></h4>
                                    <div class="recent-post-meta"></div>
                                        <a>{{ $recentPost->created_at->format('d M Y') }}</a>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

@endsection
