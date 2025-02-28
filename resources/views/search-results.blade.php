@extends('layouts.base')
@section('subPage', 'sub-page')
@section('activeBlog', 'active')
@section('content')

<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Blog List</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home', app()->getLocale()) }}">Home</a></li>
                    <li>Blog List</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--==============================
    Blog Area
==============================-->
<section class="vs-blog-wrapper space-top space-extra-bottom">
    <div class="container">
        <div class="row gx-40">
            <div class="col-lg-8">
                @foreach ($posts as $post)
                <div class="vs-blog blog-single">
                    <style>
                        .main-blog-img img {
                            height: 250px;
                            width: 100%;
                            object-fit: cover;
                        }
                    </style>
                    <div class="blog-img main-blog-img">
                        <a href="{{ route('showPost', ['locale' => app()->getLocale(), 'id' => $post->id]) }}">
                            <img src="{{ asset('storage/app/public/' . $post->image) }}" alt="Blog Image">
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="{{ route('blog', app()->getLocale()) }}"><i class="far fa-calendar"></i>{{ $post->created_at->format('d M Y') }}</a>

                        </div>
                        <h2 class="blog-title">
                            <a href="{{ route('showPost', ['locale' => app()->getLocale(), 'id' => $post->id]) }}">
                                {{ app()->getLocale() === 'ar' ? $post->title_ar : $post->title }}
                            </a>
                        </h2>
                        <p>{{ app()->getLocale() === 'ar' ? $post->short_description_ar : $post->short_description }}</p>
                        <a href="{{ route('showPost', ['locale' => app()->getLocale(), 'id' => $post->id]) }}" class="link-btn">
                            Read Details<i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area">
                    <div class="widget widget_search">
                        <form action="{{ route('search', ['locale' => app()->getLocale()]) }}" method="GET">
                            <input type="text" name="query" placeholder="Search Here">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget">
                        <h3 class="widget_title">Recent Posts</h3>
                        <div class="recent-post-wrap">
                            @foreach ($recentPosts as $recentPost)
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="{{ route('showPost', ['locale' => app()->getLocale(), 'id' => $recentPost->id]) }}">
                                        <img src="{{ asset('storage/app/public/' . $recentPost->image) }}" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title">
                                        <a class="text-inherit" href="{{ route('showPost', ['locale' => app()->getLocale(), 'id' => $recentPost->id]) }}">
                                            {{ app()->getLocale() === 'ar' ? $recentPost->title_ar : $recentPost->title }}
                                        </a>
                                    </h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html">{{ $recentPost->created_at->format('d M Y') }}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </aside>
            </div>
        </aside>
    </div>
</div>
</div>
</section>

@endsection
