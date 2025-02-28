@extends('layouts.base')
@section('activeHome', 'active')
@section('content')

    <section class="vs-hero-wrapper position-relative  ">
        <div class="vs-hero-carousel" data-height="850" data-container="1900" data-slidertype="responsive">
            <!-- Slide 1-->
            <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:in; kenburnsscale:1.1;">
                <img width="1920" height="850" src="assets/img/hero/hero-1-1.jpg" class="ls-bg" alt="hero-bg" />
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:300px; height:1558px; background-color:rgba(14, 84, 245, 0.5); top:-473px; left:51px;"
                    class="ls-l ls-text-layer d-hd-none"
                    data-ls="offsetxin:-800; offsetyin:-800; durationin:1700; delayin:1200; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; rotation:43.46;">
                </div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:589px; height:1819.7px; top:-485px; left:406px; background:linear-gradient(172deg, rgba(5, 26, 79, 0.35) 21%, rgba(0, 0, 0, 0) 54%);"
                    class="ls-l ls-text-layer d-hd-none"
                    data-ls="offsetxin:-800; offsetyin:-800; durationin:1500; delayin:1300; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; bgcolorout:transparent; colorout:transparent; rotation:43.46;">
                </div>
                <p style="font-size:18px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; border-width:2px 2px 2px 2px; border-color:#ffffff; border-radius:5px 5px 5px 5px; padding-top:9px; padding-right:23.5px; padding-left:23.5px; top:240px; left:588px; padding-bottom:9px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    {{ __('experience') }}</p>
                <h1 style="top:225px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; color:#ffffff; font-family:Exo;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    CIC
                </h1>
                <h1 style="top:305px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    {{ __('businessService') }}
                </h1>
                <div style="top:405px; left:350px; background-size:inherit; background-position:inherit; font-size:16px; line-height:28px; font-family:Fira Sans; width:695px; color:#ffffff; white-space:normal;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:600; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    {{ __('specialization') }}</div>
                <div style="top:495px; left:350px; background-size:inherit; background-position:inherit; font-size:24px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="{{ route('about' , app()->getLocale()) }}" class="vs-btn ls-hero-btn">{{ __('aboutUs') }}<i class="far fa-arrow-right"></i></a>
                        <a href="{{ route('blog' , app()->getLocale()) }}" class="vs-btn style2 ls-hero-btn">{{ __('readMore') }}<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <p style="font-size:32px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; border-width:2px 2px 2px 2px; border-color:#ffffff; border-radius:5px 5px 5px 5px; padding-top:18px; padding-right:44px; padding-left:44px; top:160px; left:90px; padding-bottom:18px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    WE HAVE TOP IT EXPERT</p>
                <h1 style="top:280px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; color:#ffffff; font-family:Exo;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    BEST business SERVICE &amp;
                </h1>
                <h1 style="top:380px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    SOLUTION
                </h1>
                <div style="top:540px; left:80px; background-size:inherit; background-position:inherit; font-size:24px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="{{ route('about' , app()->getLocale()) }}" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="{{ route('blog' , app()->getLocale()) }}" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <h1 style="top:120px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; color:#ffffff; font-family:Exo; width:10000px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    BEST Busieness SERVICE &amp;
                </h1>
                <h1 style="top:280px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; font-family:Exo; color:#ffffff; width:10000px; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    SOLUTION
                </h1>
                <div style="top:520px; left:50%; text-align:center; background-size:inherit; background-position:inherit; font-size:24px; width:1000px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="{{ route('about' , app()->getLocale()) }}" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="{{ route('blog' , app()->getLocale()) }}" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <a class="ls-l ls-hide-tablet ls-hide-phone" href="#next" target="_self" data-ls="static:forever;">
                    <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; left:1685px; top:50%;"
                        class="ls-html-layer">
                        <span class="icon-btn style2"><i class="far fa-arrow-right"></i></span>
                    </div>
                </a>
                <a class="ls-l ls-hide-tablet ls-hide-phone" href="#prev" target="_self" data-ls="static:forever;">
                    <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; left:150px; top:50%;"
                        class="ls-html-layer">
                        <span class="icon-btn style2"><i class="far fa-arrow-left"></i></span>
                    </div>
                </a>
            </div>
            <!-- Slide 2-->
            <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:out; kenburnsscale:1.1;">
                <img width="1920" height="850" src="assets/img/hero/hero-1-2.jpg" class="ls-bg" alt="hero-bg" />
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:300px; height:1558px; background-color:rgba(14, 84, 245, 0.5); top:-473px; left:51px;"
                    class="ls-l ls-text-layer d-hd-none"
                    data-ls="offsetxin:-800; offsetyin:-800; durationin:1700; delayin:1200; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; rotation:43.46;">
                </div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:589px; height:1819.7px; top:-485px; left:406px; background:linear-gradient(172deg, rgba(5, 26, 79, 0.35) 21%, rgba(0, 0, 0, 0) 54%);"
                    class="ls-l ls-text-layer d-hd-none"
                    data-ls="offsetxin:-800; offsetyin:-800; durationin:1500; delayin:1300; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; bgcolorout:transparent; colorout:transparent; rotation:43.46;">
                </div>
                <p style="font-size:18px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; border-width:2px 2px 2px 2px; border-color:#ffffff; border-radius:5px 5px 5px 5px; padding-top:9px; padding-right:23.5px; padding-left:23.5px; top:240px; left:558px; padding-bottom:9px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    {{ __('immigrationServices') }}</p>
                <h1 style="top:225px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; color:#ffffff; font-family:Exo;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    {{ __('expert') }}
                </h1>
                <h1 style="top:305px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    {{ __('businessNeeds') }}
                </h1>
                <div style="top:405px; left:350px; background-size:inherit; background-position:inherit; font-size:16px; line-height:28px; font-family:Fira Sans; width:695px; color:#ffffff; white-space:normal;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:600; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div>{{ __('consultation') }}</div> </div>
                <div style="top:495px; left:350px; background-size:inherit; background-position:inherit; font-size:24px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="{{ route('about' , app()->getLocale()) }}" class="vs-btn ls-hero-btn">{{ __('aboutUs') }}<i class="far fa-arrow-right"></i></a>
                        <a href="{{ route('blog' , app()->getLocale()) }}" class="vs-btn style2 ls-hero-btn">{{ __('readMore') }}<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <p style="font-size:32px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; border-width:2px 2px 2px 2px; border-color:#ffffff; border-radius:5px 5px 5px 5px; padding-top:18px; padding-right:44px; padding-left:44px; top:160px; left:90px; padding-bottom:18px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    PROVIDE FREE CONSULTATION</p>
                <h1 style="top:280px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; color:#ffffff; font-family:Exo;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    TOP Consultancy Services
                </h1>
                <h1 style="top:380px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    Consultancy Services
                </h1>
                <div style="top:540px; left:80px; background-size:inherit; background-position:inherit; font-size:24px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="{{ route('about' , app()->getLocale()) }}" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="{{ route('blog' , app()->getLocale()) }}" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <h1 style="top:120px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; color:#ffffff; font-family:Exo; width:10000px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    TOP Business SUPPORT
                </h1>
                <h1 style="top:280px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; font-family:Exo; color:#ffffff; width:10000px; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    &amp; MANAGEMNT
                </h1>
                <div style="top:520px; left:50%; text-align:center; background-size:inherit; background-position:inherit; font-size:24px; width:1000px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="{{ route('about' , app()->getLocale()) }}" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="{{ route('blog' , app()->getLocale()) }}" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Slide 3-->
            {{-- <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:in; kenburnsscale:1.1;">
                <img width="1920" height="850" src="assets/img/hero/hero-1-3.jpg" class="ls-bg" alt="hero-bg" />
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:300px; height:1558px; background-color:rgba(14, 84, 245, 0.5); top:-473px; left:51px;"
                    class="ls-l ls-text-layer d-hd-none"
                    data-ls="offsetxin:-800; offsetyin:-800; durationin:1700; delayin:1200; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; rotation:43.46;">
                </div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:589px; height:1819.7px; top:-485px; left:406px; background:linear-gradient(172deg, rgba(5, 26, 79, 0.35) 21%, rgba(0, 0, 0, 0) 54%);"
                    class="ls-l ls-text-layer d-hd-none"
                    data-ls="offsetxin:-800; offsetyin:-800; durationin:1500; delayin:1300; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; bgcolorout:transparent; colorout:transparent; rotation:43.46;">
                </div>
                <p style="font-size:18px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; border-width:2px 2px 2px 2px; border-color:#ffffff; border-radius:5px 5px 5px 5px; padding-top:9px; padding-right:23.5px; padding-left:23.5px; top:240px; left:635px; padding-bottom:9px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    HIGHLY QUALIFIYED ENGINERS</p>
                <h1 style="top:225px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; color:#ffffff; font-family:Exo;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    TEAM OF
                </h1>
                <h1 style="top:305px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    LEGENDS &amp; PRO ENGINERS
                </h1>
                <div style="top:405px; left:350px; background-size:inherit; background-position:inherit; font-size:16px; line-height:28px; font-family:Fira Sans; width:695px; color:#ffffff; white-space:normal;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:600; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Professionally repurpose intuitive total linkage after timely mindshare. Credibly coordinate
                    reliable collaboration and idea-sharing after turnkey catalysts for change.</div>
                <div style="top:495px; left:350px; background-size:inherit; background-position:inherit; font-size:24px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="{{ route('about' , app()->getLocale()) }}" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="{{ route('blog' , app()->getLocale()) }}" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <p style="font-size:32px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; border-width:2px 2px 2px 2px; border-color:#ffffff; border-radius:5px 5px 5px 5px; padding-top:18px; padding-right:44px; padding-left:44px; top:160px; left:90px; padding-bottom:18px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    HIGHLY QUALIFIYED ENGINERS</p>
                <h1 style="top:280px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; color:#ffffff; font-family:Exo;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    TEAM OF LEGENDS &amp;
                </h1>
                <h1 style="top:380px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    PRO ENGINERS
                </h1>
                <div style="top:540px; left:80px; background-size:inherit; background-position:inherit; font-size:24px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="{{ route('about' , app()->getLocale()) }}" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="{{ route('blog' , app()->getLocale()) }}" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <h1 style="top:120px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; color:#ffffff; font-family:Exo; width:10000px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    TEAM OF LEGENDS &amp;
                </h1>
                <h1 style="top:280px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; font-family:Exo; color:#ffffff; width:10000px; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    PRO ENGINERS
                </h1>
                <div style="top:520px; left:50%; text-align:center; background-size:inherit; background-position:inherit; font-size:24px; width:1000px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="{{ route('about' , app()->getLocale()) }}" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="{{ route('blog' , app()->getLocale()) }}" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <div data-bg-src="assets/img/bg/ab-bg-1-1.jpg">
        <!--==============================
    Features Area
    ==============================-->
    <section class="feature-wrap1 space-top space-extra-bottom">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row vs-carousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2">
                @foreach ($categories as $category)
                    <div class="col-xl-4">
                        <div class="feature-style1">
                            {{-- <div class="feature-icon"><img src="assets/img/icon/fe-1-1.png" alt="Features"></div> --}}
                            <h3 class="feature-title h5">
                                <a class="text-inherit" href="{{ route('services' , app()->getLocale()) }}">
                                    {{ app()->getLocale() === 'ar' ? $category->name_ar : $category->name_en }}
                                </a>
                            </h3>
                            <p class="feature-text">
                                {{ app()->getLocale() === 'ar' ? $category->description_ar : $category->description_en }}
                            </p>
                            <a href="{{ route('services' , app()->getLocale()) }}" class="vs-btn style3">
                                <i class="far fa-long-arrow-right"></i>{{ __('readMore') }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
        <!--==============================
    About Us
    ==============================-->

        <section class="position-relative space-bottom">
            <span class="about-shape1 d-none d-xl-block">{{ __('companyNameShort') }}</span>
            <div class="container z-index-common">
                <div class="row gx-60">
                    <div class="col-lg-6 col-xl-5 mb-50 mb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="img-box1">
                            <div class="img-1">
                                <img src="assets/img/about/ab-1-1.jpg" alt="About image">
                            </div>
                            <div class="img-2">
                                <img src="assets/img/about/ab-1-2.jpg" alt="About image">
                                <a class="play-btn style2 position-center popup-video"
                                   href="https://www.youtube.com/watch?v=__JSEk"><i class=""><i
                                       class="fas fa-play"></i></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 align-self-center wow fadeInUp" data-wow-delay="0.3s">
                        <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>{{ __('aboutCIC') }}</span>
                        <h2 class="sec-title h1">{{ __('consultancyIntegratedCompany') }}</h2>
                        <p class="mb-4 mt-1 pb-3 text-justify">{{ __('description') }}</p>
                        <div class="call-media">
                            <div class="call-media__icon"><img src="assets/img/icon/tel-1-1.png" alt="icon"></div>
                            <div class="media-body">
                                <span class="call-media__label">{{ __('serviceAvailable') }}</span>
                                <p class="call-media__info">{{ __('callUs') }} <a href="tel:+971 50 145 9111">+971 50 145 9111</a></p>
                            </div>
                        </div>
                        <a href="{{ route('about' , app()->getLocale()) }}" class="vs-btn"><i class="far fa-long-arrow-right"></i>{{ __('aboutUs') }}</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--==============================
    Service Area
    ==============================-->
    <section class="space-top space-extra-bottom" data-bg-src="assets/img/bg/sr-bg-1-1.png">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="title-area">
                        <span class="sec-subtitle">{{ __('latestServices') }}</span>
                        <h2 class="sec-title h1">{{ __('whatKindOfServices') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.2s">
                @foreach ($services as $service)
                    <div class="col-md-6 col-lg-4">
                        <div class="service-style1">
                            <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.jpg"></div>
                            <div class="service-icon"><img src="assets/img/icon/sr-icon-1-1.png" alt="Features"></div>
                            <h3 class="service-title h5">
                                <a href="{{ route('service.details', ['locale' => app()->getLocale(), 'id' => $service->id]) }}">{{ app()->getLocale() === 'ar' ? $service->title_ar : $service->title_en }}</a>
                            </h3>
                            <p class="service-text">
                                {{ app()->getLocale() === 'ar' ? $service->short_description_ar : $service->short_description_en }}
                            </p>
                            <a href="{{ route('service.details', ['locale' => app()->getLocale(), 'id' => $service->id]) }}" class="vs-btn style3">{{ __('readMore') }}<i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--==============================
    Counter Area
    ==============================-->
    <div class="position-relative ">
        <div class="counter-shape1"></div>
        <div class="bg-black z-index-common space" data-bg-src="assets/img/bg/counter-bg-1-1.jpg">
            <div class="container wow fadeInUp" data-wow-delay="0.2s">
                <div class="row justify-content-between gy-4">
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="assets/img/icon/count-1-1.png" alt="icon"></div>
                            <div class="media-body">
                                <span class="10 h1 text-white">858</span>
                                <p class="counter-media__title text-white">{{ __('successfulProjects') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="assets/img/icon/count-1-2.png" alt="icon"></div>
                            <div class="media-body">
                                <span class="10 h1 text-white">650</span>
                                <p class="counter-media__title text-white">{{ __('mediaActivities') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="assets/img/icon/count-1-3.png" alt="icon"></div>
                            <div class="media-body">
                                <span class="10 h1 text-white">567</span>
                                <p class="counter-media__title text-white">{{ __('skilledExperts') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="assets/img/icon/count-1-4.png" alt="icon"></div>
                            <div class="media-body">
                                <span class="10 h1 text-white">28k</span>
                                <p class="counter-media__title text-white">{{ __('happyClients') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Team Area
    ==============================-->
    {{-- <section class=" space-top space-extra-bottom">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sec-subtitle">Great Team Members</span>
                        <h2 class="sec-title h1">We Have Expert Team</h2>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2">
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="team-details.html"><img src="assets/img/team/t-1-1.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="team-details.html">Daniel Matthew</a>
                            </h3>
                            <p class="team-degi">Cheif Expert</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="team-details.html"><img src="assets/img/team/t-1-2.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="team-details.html">Grayson Gabriel</a>
                            </h3>
                            <p class="team-degi">Head Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="team-details.html"><img src="assets/img/team/t-1-3.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="team-details.html">Alexander Mason</a>
                            </h3>
                            <p class="team-degi">Founder & CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="team-details.html"><img src="assets/img/team/t-1-4.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="team-details.html">Maverick Cameron</a>
                            </h3>
                            <p class="team-degi">Pro Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="team-details.html"><img src="assets/img/team/t-1-5.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="team-details.html">Marian Widjya</a>
                            </h3>
                            <p class="team-degi">Lead Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--==============================
    FAQ Area
    ==============================-->
    <section class="faq-wrap1  ">
        <div class="faq-shape1" data-bg-src="assets/img/bg/faq-bg-1-1.jpg"></div>
        <div class="faq-shape2" data-bg-src="assets/img/bg/faq-bg-1-2.jpg"></div>
        <div class="container">
            <div class="row gx-60">
                <div class="col-lg-6 pb-20 pb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="img-box2">
                        <div class="img-1"><img src="assets/img/faq/faq-1-1.jpg" alt="FAQ image"></div>
                        <div class="img-2"><img src="assets/img/faq/faq-1-2.jpg" alt="FAQ image"><a
                                class="play-btn style3 position-center"
                                href="https://www.youtube.com/watch?v=_ss7JSEk"><i class=""><i
                                        class="fas fa-play"></i></i></a></div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <span class="sec-subtitle text-white"><i class="fas fa-bring-forward"></i>{{ __('companyNameFullName') }}</span>
                    <h2 class="sec-title text-white mb-4 pb-2 h1">{{ __('howCanCICAssist') }}</h2>
                    <div class="accordion accordion-style1" id="faqVersion1">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    {{ __('businessFormationServicesQuestion') }}
                                </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p> {{ __('businessFormationServicesAnswer') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    {{ __('immigrationServicesQuestion') }}
                                </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p>{{ __('immigrationServicesAnswer') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    {{ __('auditingServicesQuestion') }}
                                </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p> {{ __('auditingServicesAnswer') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Skill Area
    ==============================-->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-5 col-xxl-auto mb-30 pb-20 pb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/img/skill/skill-1-1.jpg" alt="Skill image">
                </div>
                <div class="col-lg-7 col-xxl-6 me-xl-auto">
                    <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>{{ __('consultancyIntegratedCompanyExpertise') }}</span>
                    <h2 class="sec-title h1">{{ __('empoweringBusinesses') }}</h2>
                    <p class="mb-4 pb-1">{{ __('cicDescription') }}</p>
                    <div class="progress-box">
                        <h3 class="progress-box__title">{{ __('businessFormation') }}</h3>
                        <span class="progress-box__number">100%</span>
                        <div class="progress-box__progress">
                            <div class="progress-box__bar" role="progressbar" style="width: 100%" aria-valuenow="95"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress-box">
                        <h3 class="progress-box__title">{{ __('immigrationServices') }}</h3>
                        <span class="progress-box__number">100%</span>
                        <div class="progress-box__progress">
                            <div class="progress-box__bar" role="progressbar" style="width: 100%" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress-box">
                        <h3 class="progress-box__title">{{ __('auditCompliance') }}</h3>
                        <span class="progress-box__number">100%</span>
                        <div class="progress-box__progress">
                            <div class="progress-box__bar" role="progressbar" style="width: 100%" aria-valuenow="85"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    CTA Area
    ==============================-->
    <section class="z-index-common space" data-bg-src="assets/img/bg/cta-bg-1-1.jpg">
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
    <section class="space-top space-extra-bottom" data-bg-src="assets/img/bg/process-bg-1-1.jpg" id="processv1">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sec-subtitle">{{ __('expertTeam') }}</span>
                        <h2 class="sec-title h1">{{ __('howCICCanAssist') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3 process-style1">
                    <div class="process-arrow"><img src="assets/img/icon/process-arrow-1-1.png" alt="arrow"></div>
                    <div class="process-icon">
                        <img src="assets/img/icon/process-1-4.png" alt="icon">
                        <span class="process-number">01</span>
                    </div>
                    <h3 class="process-title h5">{{ __('businessFormationTitle') }}</h3>
                    <p class="process-text">{{ __('businessFormationText') }}</p>
                </div>
                <div class="col-sm-6 col-lg-3 process-style1">
                    <div class="process-arrow"><img src="assets/img/icon/process-arrow-1-1.png" alt="arrow"></div>
                    <div class="process-icon">
                        <img src="assets/img/icon/process-1-1.png" alt="icon">
                        <span class="process-number">02</span>
                    </div>
                    <h3 class="process-title h5">{{ __('visaProcessingTitle') }}</h3>
                    <p class="process-text">{{ __('visaProcessingText') }}</p>
                </div>
                <div class="col-sm-6 col-lg-3 process-style1">
                    <div class="process-arrow"><img src="assets/img/icon/process-arrow-1-1.png" alt="arrow"></div>
                    <div class="process-icon">
                        <img src="assets/img/icon/process-1-2.png" alt="icon">
                        <span class="process-number">03</span>
                    </div>
                    <h3 class="process-title h5">{{ __('auditComplianceTitle') }}</h3>
                    <p class="process-text">{{ __('auditComplianceText') }}</p>
                </div>
                <div class="col-sm-6 col-lg-3 process-style1">
                    <div class="process-arrow"><img src="assets/img/icon/process-arrow-1-1.png" alt="arrow"></div>
                    <div class="process-icon">
                        <img src="assets/img/icon/process-1-3.png" alt="icon">
                        <span class="process-number">04</span>
                    </div>
                    <h3 class="process-title h5">{{ __('strategicConsultancyTitle') }}</h3>
                    <p class="process-text">{{ __('strategicConsultancyText') }}</p>
                </div>
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
    <!--==============================
    Brand Section
    ==============================-->
    <section class=" space-bottom">
        <div class="container">
            <div class="sec-line-wrap">
                <div class="sec-line"></div>
                <h2 class="sec-title2">{{ __('trustedClients') }}</h2>
                <div class="sec-line"></div>
            </div>
            <div class="row vs-carousel text-center" data-slide-show="5" data-md-slide-show="3" data-sm-slide-show="2"
                data-xs-slide-show="2">
                <div class="col-auto"><img src="assets/img/brand/br-1-1.png" alt="Brand"></div>
                <div class="col-auto"><img src="assets/img/brand/br-1-2.png" alt="Brand"></div>
                <div class="col-auto"><img src="assets/img/brand/br-1-3.png" alt="Brand"></div>
                <div class="col-auto"><img src="assets/img/brand/br-1-4.png" alt="Brand"></div>
                <div class="col-auto"><img src="assets/img/brand/br-1-5.png" alt="Brand"></div>
                <div class="col-auto"><img src="assets/img/brand/br-1-6.png" alt="Brand"></div>
            </div>
        </div>
    </section>
    <!--==============================
    Blog Area
    ==============================-->
    <section class="vs-blog-wrapper space-top space-extra-bottom" data-bg-src="assets/img/bg/blog-bg-1-1.jpg">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sec-subtitle">{{ __('weeklyUpdates') }}</span>
                        <h2 class="sec-title h1">{{ __('latestBlog') }}</h2>
                    </div>
                </div>
            </div>

            <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
                @foreach ($posts as $post)
                    <div class="col-xl-4">
                        <div class="vs-blog blog-style1">
                            <div class="blog-img blog-img-adjust-size">
                                <img src="{{ asset('storage/app/public/' . $post->image) }}" alt="Blog Image" class="w-100">
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="{{ route('blog' , app()->getLocale()) }}"><i class="far fa-calendar"></i>{{ $post->updated_at->format('d M Y') }}</a>
                                        {{-- <a href="{{ route('blog' , app()->getLocale()) }}"><i class=""></i>{{ $post->category }}</a> --}}
                                    </div>
                                    <h3 class="blog-title h5"><a href="{{ route('showPost', ['locale' => app()->getLocale(), 'id' => $post->id]) }}">{{ app()->getLocale() === 'ar' ? $post->short_description_ar : $post->short_description }}</a></h3>
                                    <a href="{{ route('showPost', ['locale' => app()->getLocale(), 'id' => $post->id]) }}" class="link-btn">{{ __('readDetails') }}<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection
