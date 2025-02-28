@extends('layouts.base')

@section('subPage', 'sub-page')
@section('activeServices', 'active')
@section('content')

<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">{{ app()->getLocale() === 'ar' ? $service->title_ar : $service->title_en }}</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home' , app()->getLocale()) }}">{{ __('home') }}</a></li>
                    <li>{{ app()->getLocale() === 'ar' ? $service->title_ar : $service->title_en }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--==============================
Service Area
==============================-->
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-8">
                <!-- Displaying Banner Image -->
                <div class="mb-3 pb-3">
                    <img src="{{ asset('storage/app/public/' . $service->banner_image) }}" alt="Banner image">
                </div>

                <h2 class="h4">{{ app()->getLocale() === 'ar' ? $service->title_ar : $service->title_en }}</h2>
                <p>{{ app()->getLocale() === 'ar' ? $service->short_description_ar : $service->short_description_en }}</p>

                <div class="row gx-0 mb-4 pb-2 pt-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="col-xl-6">
                        <img src="{{ asset('storage/app/public/' . $service->image2) }}" alt="Additional image" class="w-100">
                    </div>
                    <div class="col-xl-6">
                        <div class="service-list-box">
                            <h3 class="h5 title">Service Features</h3>
                            <div class="list-style3">
                                <ul>
                                    <li><i class="fal fa-check-circle"></i>{{ app()->getLocale() === 'ar' ? $service->servives_feature1_ar : $service->servives_feature1_en }}</li>
                                    <li><i class="fal fa-check-circle"></i>{{ app()->getLocale() === 'ar' ? $service->servives_feature2_ar : $service->servives_feature2_en }}</li>
                                    <li><i class="fal fa-check-circle"></i>{{ app()->getLocale() === 'ar' ? $service->servives_feature3_ar : $service->servives_feature3_en }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="h5">{{ app()->getLocale() === 'ar' ? $service->sub_title_ar : $service->sub_title_en }}</h3>
                <p>{{ app()->getLocale() === 'ar' ? $service->content_ar : $service->content_en }}</p>

                <div class="row pt-3 mb-30 pb-10 gy-30 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="col-md-6"><img src="{{ asset('storage/app/public/' . $service->image) }}" alt="project image"></div>
                    <div class="col-md-6"><img src="{{ asset('storage/app/public/' . $service->image2) }}" alt="project image"></div>
                </div>

                <!-- FAQ Area -->
                <div class="accordion accordion-style1 layout2 wow fadeInUp" data-wow-delay="0.2s" id="faqVersion1">
                    <!-- FAQ items go here -->
                </div>
            </div>

            <div class="col-lg-4">
                <aside class="service-sidebar">
                    <div class="widget widget_categories">
                        <h3 class="widget_title">All Services</h3>
                        <ul>
                            @foreach ($services as $service)
                                <li>
                                    <a href="{{ route('service.details', ['locale' => app()->getLocale(), 'id' => $service->id]) }}">{{ app()->getLocale() === 'ar' ? $service->title_ar : $service->title_en }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h3 class="widget_title">{{ __('workingHours') }}</h3>
                        <div class="widget-workhours">
                            <ul>
                                <li><i class="fal fa-clock"></i>{{ __('workingDaysDtails') }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="quote-box" data-bg-src="">
                        <h3 class="quote-box__title">{{ __('haveAnyQuery') }}</h3>
                        <a href="{{ route('contact' , app()->getLocale()) }}" class="vs-btn">{{ __('ctaGetQuote') }}<i class="far fa-arrow-right"></i></a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection
