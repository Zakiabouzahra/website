@extends('layouts.base')
@section('subPage', 'sub-page')
@section('activeContact', 'active')
@section('content')
<div class="breadcumb-wrapper " data-bg-src="{{asset('assets/img/breadcumb/breadcumb-bg.jpg')}}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">{{ __('contactUs') }}</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home' , app()->getLocale()) }}">{{ __('home') }}</a></li>
                    <li>{{ __('contactUs') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--==============================
  Contact Form Area
==============================-->
<section class=" space-top space-extra-bottom">
    <div class="container">

        <div class="tab-content" id="nav-contactTabContent">
            <div class="tab-pane fade show active" id="nav-GermanyAddress" role="tabpanel" aria-labelledby="nav-GermanyAddress-tab">
                <div class="row">
                    <div class="col-lg-6 mb-30">
                        <div class="contact-box">
                            <h3 class="contact-box__title h4">{{ __('officeAddress') }}</h3>
                            <p class="contact-box__text">{{ __('officeAddressDetails') }}</p>
                            <div class="contact-box__item">
                                <div class="contact-box__icon"><i class="fal fa-phone-alt"></i></div>
                                <div class="media-body">
                                    <h4 class="contact-box__label">{{ __('phoneNumber') }} & {{ __('email') }}</h4>
                                    <p class="contact-box__info"><a href="tel:+971501459111">+971 50 145 9111</a><a href="mailto:info@cicemirates.com">info@cicemirates.com</a></p>
                                </div>
                            </div>
                            <div class="contact-box__item">
                                <div class="contact-box__icon"><i class="far fa-map-marker-alt"></i></div>
                                <div class="media-body">
                                    <h4 class="contact-box__label">{{ __('officeAddress') }}</h4>
                                    <p class="contact-box__info">{{ __('dubaiUAE') }}</p>
                                </div>
                            </div>
                            <div class="contact-box__item">
                                <div class="contact-box__icon"><i class="far fa-clock"></i></div>
                                <div class="media-body">
                                    <h4 class="contact-box__label">{{ __('workingHours') }}</h4>
                                    <p class="contact-box__info">{{ __('workingDaysDtails') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-30">
                        <div class="contact-box">
                            <h3 class="contact-box__title h4">{{ __('leaveMessage') }}</h3>
                            <p class="contact-box__text">{{ __('weAreReadyToHelp') }}</p>
                            <form class="contact-box__form ajax-contact" action="{{ route('contact.store', ['locale' => app()->getLocale()]) }}" method="POST">
                                @csrf
                                <div class="row gx-20">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" id="name" placeholder="{{ __('name') }}" required>
                                        <i class="fal fa-user"></i>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="phone" name="phone" id="phone" placeholder="{{ __('phone') }}" required>
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="email" name="email" id="email" placeholder="{{ __('email') }}" required>
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="col-12 form-group">
                                        <select name="services" id="services" required>
                                            <option selected disabled hidden>Select services</option>
                                            <option value="Business Formation">Business Formation</option>
                                            <option value="Visa Processing">Visa Processing</option>
                                            <option value="Consultancy Services">Consultancy Services</option>
                                            <option value="Audit Services">Audit Services</option>
                                        </select>
                                    </div>
                                    <div class="col-12 form-group">
                                        <textarea name="message" id="message" placeholder="{{ __('message') }}" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="vs-btn">{{ __('sendMessage') }}<i class="far fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                            {{-- <p class="form-messages mb-0 mt-3"></p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
