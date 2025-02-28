@extends('layouts.base')
@section('subPage', 'sub-page')
@section('activeAbout', 'active')
@section('content')
<div class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/breadcumb/breadcumb-bg.jpg')}}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">{{ __('aboutUs') }}</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home' , app()->getLocale()) }}">{{ __('home') }}</a></li>
                    <li>{{ __('aboutUs') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--==============================
Service Area
==============================-->
<section class="space-top space-extra-bottom">
    <div class="container wow fadeInUp" data-wow-delay="0.2s">
        <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
            @foreach ($categories as $category)
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1 layout3">
                        <div class="service-bg" data-bg-src="{{asset('assets/img/bg/sr-box-bg-1.jpg')}}"></div>
                        <div class="service-top">
                            <div class="service-icon"><img src="{{asset('assets/img/icon/sr-icon-1-1.png')}}" alt="Features"></div>
                            <span class="service-number">{{ $category->id }}</span>
                        </div>
                        <h3 class="service-title h5">
                            <a href="{{ route('services' , app()->getLocale()) }}">
                                {{ app()->getLocale() === 'ar' ? $category->name_ar : $category->name_en }}
                            </a>
                        </h3>
                        <p class="service-text">
                            {{ app()->getLocale() === 'ar' ? $category->description_ar : $category->description_en }}
                        </p>
                        <a href="{{ route('services' , app()->getLocale()) }}" class="link-btn">{{ __('readMore') }}<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!--==============================
About Us
==============================-->
<section data-bg-src="{{asset('assets/img/bg/about-bg-5-1.jpg')}}">
    <div class="container container-style1">
        <div class="row flex-row-reverse align-items-center gx-70">
            <div class="col-lg-6 col-xl">
                <img src="{{asset('assets/img/about/ab-7-1.jpg')}}" alt="about image">
            </div>
            <div class="col-lg-6 col-xl-auto wow fadeInUp" data-wow-delay="0.2s">
                <div class="about-box2">
                    <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Your Partner in Success</span>
                    <h2 class="sec-title3 h1">{{ __('empoweringBusinesses') }}</h2>
                    <p>{{ __('cicDescription') }}</p>
                    <div class="row gx-0 align-items-center flex-row-reverse justify-content-end mt-sm-3 pt-sm-3 mb-30 pb-10">
                        <div class="col-sm-auto">
                            <p class="author-degi">{{ __('email') }}</p>
                            <h3 class="h5 author-name">info@cicemirates.com</h3>
                        </div>
                        <div class="col-sm-auto">
                            <div class="about-call">
                                <div class="about-call__icon"><i class="fas fa-phone-alt"></i></div>
                                <div class="media-body">
                                    <span class="about-call__label">{{ __('callToAskAnyQuery') }}</span>
                                    <p class="about-call__number"><a href="tel:+971501459111">+971 50 145 9111</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('blog' , app()->getLocale()) }}" class="vs-btn">Learn More About Us<i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Testimonial Area
==============================-->
<section class="space-top space-extra-bottom" data-bg-src="">
    <div class="container wow fadeInUp" data-wow-delay="0.2s">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 text-center text-lg-start">
                <div class="title-area">
                    <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>{{ __('ourClientsFeedback') }}</span>
                    <h2 class="sec-title3 h1">{{ __('inspiringTrust') }}</h2>
                </div>
            </div>
            <div class="col-auto d-none d-lg-block">
                <div class="sec-btns2">
                    <a href="https://www.youtube.com/watchs7k" class="vs-btn popup-video">{{ __('watchVideo') }}<i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
        <div class="row testi-style2-slide vs-carousel" data-slide-show="2" data-md-slide-show="2">
            <div class="col-xl-6">
                <div class="testi-style2">
                    <div class="testi-body">
                        <div class="author-img"><img src="{{asset('assets/img/testimonial/auth-4-1.jpg')}}" alt="Testimonial"></div>
                        <div class="media-body">
                            <p class="testi-text">{{ __('testimonial1Text') }}</p>
                        </div>
                    </div>
                    <h3 class="testi-name">{{ __('testimonial1Name') }}</h3>
                    <div class="testi-degi">{{ __('testimonial1Role') }}</div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="testi-style2">
                    <div class="testi-body">
                        <div class="author-img"><img src="{{asset('assets/img/testimonial/auth-4-1.jpg')}}" alt="Testimonial"></div>
                        <div class="media-body">
                            <p class="testi-text">{{ __('testimonial2Text') }}</p>
                        </div>
                    </div>
                    <h3 class="testi-name">{{ __('testimonial2Name') }}</h3>
                    <div class="testi-degi">{{ __('testimonial2Role') }}</div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
    CTA Area
    ==============================-->
    <section class="z-index-common space" data-bg-src="{{asset('assets/img/bg/cta-bg-1-2.jpg')}}">
        <div class="container">
            <div class="row text-center text-lg-start align-items-center justify-content-between">
                <div class="col-lg-auto">
                    <span class="sec-subtitle text-white">{{ __('ctaAnswerQuestions') }}</span>
                    <h2 class="h1 sec-title cta-title1">{{ __('ctaNeedConsultation') }}</h2>
                </div>
                <div class="col-lg-auto">
                    <a href="{{ route('contact' , app()->getLocale()) }}" class="vs-btn">{{ __('ctaGetQuote') }}<i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
