@extends('layouts.base')

@section('subPage', 'sub-page')
@section('activeServices', 'active')

@section('content')
<div class="breadcumb-wrapper " data-bg-src="{{asset('assets/img/breadcumb/breadcumb-bg.jpg')}}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">{{ __('services') }}</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home' , app()->getLocale()) }}">{{ __('home') }}</a></li>
                    <li>{{ __('services') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--==============================
Service Area
==============================-->
<section class=" space-top space-extra-bottom">
    <div class="container   wow fadeInUp" data-wow-delay="0.2s">
        <div class="row">
            @foreach ($services as $service)
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1 layout2">
                        <div class="service-bg" data-bg-src="{{asset('assets/img/bg/sr-box-bg-1.jpg')}}"></div>
                        <div class="service-icon"><img src="{{asset('assets/img/icon/sr-icon-1-1.png')}}" alt="Features"></div>
                        <h3 class="service-title h5"><a href="{{ route('service.details', ['locale' => app()->getLocale(), 'id' => $service->id]) }}">{{ app()->getLocale() === 'ar' ? $service->title_ar : $service->title_en }}</a></h3>
                        <p class="service-text">{{ app()->getLocale() === 'ar' ? $service->short_description_ar : $service->short_description_en}}</p>
                        <a href="{{ route('service.details', ['locale' => app()->getLocale(), 'id' => $service->id]) }}" class="vs-btn style3">{{ __('readMore') }}<i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>

            @endforeach
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
<!--==============================
Work Process
==============================-->
<section class="process-wrap1 space-top space-extra-bottom" data-bg-src="{{asset('assets/img/bg/process-bg-3-1.jpg')}}">
    <div class="container wow fadeInUp" data-wow-delay="0.2s">
        <div class="row justify-content-center text-center">
            <div class="col-xl-6">
                <div class="title-area">
                    <span class="sec-subtitle">What We Do For You</span>
                    <h2 class="sec-title3 h1">Our Specialization</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            @foreach ($categories as $category)
                <div class="col-md-4 col-xl-auto process-style2">
                    <div class="process-arrow"><img src="{{asset('assets/img/icon/process-arrow-2-1.png')}}" alt="arrow"></div>
                    <div class="process-icon">
                        <img src="{{asset('assets/img/icon/process-1-1.png')}}" alt="icon">
                        <span class="process-number">{{ $category->id }}</span>
                    </div>
                    <h3 class="process-title h5">
                        {{ app()->getLocale() === 'ar' ? $category->name_ar : $category->name_en }}
                    </h3>
                    <p class="process-text">
                        {{ app()->getLocale() === 'ar' ? $category->description_ar : $category->description_en }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--==============================
Testimonial Area
==============================-->
<section class="space-top space-extra-bottom">
    <div class="container wow fadeInUp" data-wow-delay="0.2s">
        <div class="row justify-content-between">
            <div class="col-lg-auto text-center text-lg-start">
                <div class="title-area">
                    <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>{{ __('clientTestimonials') }}</span>
                    <h2 class="sec-title h1">{{ __('whatOurClientsSay') }}</h2>
                </div>
            </div>
            <div class="col-auto d-none d-lg-block">
                <div class="sec-btns">
                    <button class="vs-btn style4" data-slick-prev="#testislide1"><i class="far fa-arrow-left"></i>Prev</button>
                    <button class="vs-btn style4" data-slick-next="#testislide1">Next<i class="far fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2" id="testislide1">
            <div class="col-xl-4">
                <div class="testi-style1">
                    <div class="testi-icon"><i class="fal fa-quote-right"></i></div>
                    <p class="testi-text">{{ __('testimonial1Text') }}</p>
                    <h3 class="testi-name h6">{{ __('testimonial1Name') }}</h3>
                    <div class="testi-degi">{{ __('testimonial1Role') }}</div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="testi-style1">
                    <div class="testi-icon"><i class="fal fa-quote-right"></i></div>
                    <p class="testi-text">{{ __('testimonial2Text') }}</p>
                    <h3 class="testi-name h6">{{ __('testimonial2Name') }}</h3>
                    <div class="testi-degi">{{ __('testimonial2Role') }}</div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="testi-style1">
                    <div class="testi-icon"><i class="fal fa-quote-right"></i></div>
                    <p class="testi-text">{{ __('testimonial3Text') }}</p>
                    <h3 class="testi-name h6">{{ __('testimonial3Name') }}</h3>
                    <div class="testi-degi">{{ __('testimonial3Role') }}</div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="testi-style1">
                    <div class="testi-icon"><i class="fal fa-quote-right"></i></div>
                    <p class="testi-text">{{ __('testimonial4Text') }}</p>
                    <h3 class="testi-name h6">{{ __('testimonial4Name') }}</h3>
                    <div class="testi-degi">{{ __('testimonial4Role') }}</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
