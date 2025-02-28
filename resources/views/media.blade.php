@extends('layouts.base')

@section('subPage', 'sub-page')
@section('activeMedia', 'active')
@section('content')
<div class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/breadcumb/breadcumb-bg.jpg')}}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">{{ app()->getLocale() === 'ar' ? 'خطط الأسعار' : 'Pricing Plans' }}</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home' , app()->getLocale()) }}">{{ app()->getLocale() === 'ar' ? 'الرئيسية' : 'Home' }}</a></li>
                    <li>{{ app()->getLocale() === 'ar' ? 'خطط الأسعار' : 'Pricing Plans' }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--==============================

==============================-->
<section class="space-top space-extra-bottom">
    <div class="container wow fadeInUp" data-wow-delay="0.2s">
        <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2" data-center-mode="true">
            @foreach ($packages as $package)
            <div class="col-xl-4">
                <div class="price-style1">
                    <div class="price-shape" data-bg-src="assets/img/shape/price-bg-shape-1-1.png"></div>
                    <h3 class="price-package h5">{{ app()->getLocale() === 'ar' ? $package->title_ar : $package->title_en }}</h3>
                    <div class="price-amount h1">{{ $package->price }} <span class="price-duration">/{{ app()->getLocale() === 'ar' ? 'درهم' : 'AED' }}</span></div>
                    <div class="price-features">
                        <ul>
                            <li><i class="far fa-check-circle"></i>{{ app()->getLocale() === 'ar' ? $package->item1_ar : $package->item1 }}</li>
                            <li><i class="far fa-check-circle"></i>{{ app()->getLocale() === 'ar' ? $package->item2_ar : $package->item2 }}</li>
                            <li><i class="far fa-check-circle"></i>{{ app()->getLocale() === 'ar' ? $package->item3_ar : $package->item3 }}</li>
                            <li><i class="far fa-check-circle"></i>{{ app()->getLocale() === 'ar' ? $package->item4_ar : $package->item4 }}</li>
                        </ul>
                    </div>
                    <a href="{{ route('contact' , app()->getLocale()) }}" class="vs-btn">{{ app()->getLocale() === 'ar' ? 'ابدأ الآن' : 'Get Started' }}<i class="far fa-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--==============================
CTA Area
==============================-->
<section class="z-index-common space" data-bg-src="assets/img/bg/cta-bg-1-2.jpg">
    <div class="container">
        <div class="row text-center text-lg-start align-items-center justify-content-between">
            <div class="col-lg-auto">
                <span class="sec-subtitle text-white">{{ app()->getLocale() === 'ar' ? 'نحن هنا للإجابة على أسئلتك على مدار الساعة' : 'We are here to answer your questions 24/7' }}</span>
                <h2 class="h1 sec-title cta-title1">{{ app()->getLocale() === 'ar' ? 'هل تحتاج إلى استشارة؟' : 'Need A Consultation?' }}</h2>
            </div>
            <div class="col-lg-auto">
                <a href="{{ route('contact' , app()->getLocale()) }}" class="vs-btn">{{ app()->getLocale() === 'ar' ? 'احصل على عرض أسعار' : 'Get A Quote' }}<i class="far fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<div class="space-bottom"></div>
<section class="space-bottom">
    <div class="container">
        <div class="sec-line-wrap">
            <div class="sec-line"></div>
            <h2 class="sec-title2">{{ app()->getLocale() === 'ar' ? 'عملاؤنا الموثوقون' : 'Our Trusted Clients' }}</h2>
            <div class="sec-line"></div>
        </div>
        <div class="row vs-carousel text-center" data-slide-show="5" data-md-slide-show="3" data-sm-slide-show="2" data-xs-slide-show="2">
            <div class="col-auto"><img src="assets/img/brand/br-1-1.png" alt="Brand"></div>
            <div class="col-auto"><img src="assets/img/brand/br-1-2.png" alt="Brand"></div>
            <div class="col-auto"><img src="assets/img/brand/br-1-3.png" alt="Brand"></div>
            <div class="col-auto"><img src="assets/img/brand/br-1-4.png" alt="Brand"></div>
            <div class="col-auto"><img src="assets/img/brand/br-1-5.png" alt="Brand"></div>
            <div class="col-auto"><img src="assets/img/brand/br-1-6.png" alt="Brand"></div>
        </div>
    </div>
</section>
@endsection
