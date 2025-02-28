<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <title>CIC Admin</title>
    <meta charset="utf-8">
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/animation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/font/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('admin/icon/style.css')}}">
    <link rel="shortcut icon" href="{{asset('admin/images/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('admin/images/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/sweetalert.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/custom.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @stack("styles")
</head>

<body class="body">
    <div id="wrapper">
        <div id="page" class="">
            <div class="layout-wrap">

                <!-- <div id="preload" class="preload-container">
    <div class="preloading">
        <span></span>
    </div>
</div> -->
                <div class="section-menu-left">
                    <div class="box-logo">
                        <a href="{{ route('admin.index') }}" id="site-logo-inner">
                            <img class="logo" alt="" src="{{asset('admin/images/logo/logo.png')}}"
                                data-light="{{asset('admin/images/logo/logo.png')}}" data-dark="{{asset('admin/images/logo/logo.png')}}"
                                data-width="154px" data-height="52px" data-retina="{{asset('admin/images/logo/logo.png')}}">
                        </a>
                    </div>
                    {{-- </div>
                        </a>
                        <div class="button-show-hide">
                            <i class="icon-menu-left"></i>
                        </div>
                    </div> --}}
                    <div class="center">
                        <div class="center-item">
                            <div class="center-heading">Main Home</div>
                            <ul class="menu-list">
                                <li class="menu-item">
                                    <a href="{{ route('admin.index') }}" class="">
                                        <div class="icon"><i class="icon-grid"></i></div>
                                        <div class="text">Dashboard</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="center-item">
                            <ul class="menu-list">
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="fa-solid fa-layer-group"></i></div>
                                        <div class="text">Categories</div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.categories.create') }}" class="">
                                                <div class="text">New Category</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.categories.index') }}" class="">
                                                <div class="text">All Categories</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="fa-solid fa-file"></i></div>
                                        <div class="text">Services</div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.services.create') }}" class="">
                                                <div class="text">New Service</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.services.index') }}" class="">
                                                <div class="text">All Services</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="fa-solid fa-list-check"></i></div>
                                        <div class="text">Projects</div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.projects.create') }}" class="">
                                                <div class="text">New Project</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.projects.index') }}" class="">
                                                <div class="text">All Projects</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="fa-solid fa-rss"></i></div>
                                        <div class="text">Posts</div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.posts.create') }}" class="">
                                                <div class="text">New Post</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.posts.index') }}" class="">
                                                <div class="text">All Posts</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="fa-solid fa-handshake-angle"></i></div>
                                        <div class="text">Clients</div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.clients.create') }}" class="">
                                                <div class="text">New Client</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.clients.index') }}" class="">
                                                <div class="text">All Clients</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="fa-solid fa-gift"></i> </div>
                                        <div class="text">Packages</div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.packages.create') }}" class="">
                                                <div class="text">New Package</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.packages.index') }}" class="">
                                                <div class="text">All Packages</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('admin.messages.index') }}" class="">
                                        <div class="icon"><i class="fa-solid fa-id-card"></i></div>
                                        <div class="text">contact</div>
                                    </a>
                                </li>

                                {{-- <li class="menu-item">
                                    <a href="{{ route('admin.clients.index') }}" class="">
                                        <div class="icon"><i class="icon-user"></i></div>
                                        <div class="text">Client</div>
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="section-content-right">

                    <div class="header-dashboard">
                        <div class="wrap">
                            <div class="header-left">
                                <a href="index-2.html">
                                    <img class="" id="logo_header_mobile" alt="" src="{{asset('admin/images/logo/logo.png')}}"
                                        data-light="{{asset('admin/images/logo/logo.png')}}" data-dark="{{asset('admin/images/logo/logo.png')}}"
                                        data-width="154px" data-height="52px" data-retina="{{asset('admin/images/logo/logo.png')}}">
                                </a>
                                <div class="button-show-hide">
                                    <i class="icon-menu-left"></i>
                                </div>

                            </div>
                            <div class="header-grid">




                                <div class="popup-wrap user type-header">
                                    <style>
                                        .circle-container {
                                            display: inline-block;
                                            width: 50px; /* Adjust based on your needs */
                                            height: 50px; /* Adjust based on your needs */
                                            background-color: white;
                                            border-radius: 50%;
                                            overflow: hidden;
                                            box-shadow: 0 0 10px rgba(0,0,0,0.1);
                                            padding: 15% ;
                                        }
                                        .circle-container img {
                                            width: 95%;
                                            height: 95%;
                                            object-fit :contain;
                                        }
                                    </style>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-user wg-user">
                                                <span class="image">
                                                    <div class="circle-container">
                                                        <img src="{{asset('admin/images/logo/logo.png')}}" alt="CIC">
                                                    </div>
                                                    {{-- <img src="{{asset('admin/images/logo/logo.png')}}" alt=""> --}}
                                                </span>
                                                <span class="flex flex-column">
                                                    <span class="body-title mb-2 text-white">{{ Auth::user()->name }}</span>
                                                    <span class="text-tiny text-white">Admin</span>
                                                </span>
                                            </span>
                                        </button>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="main-content">

                        @yield('content')

                        <div class="bottom-page">
                            <div class="body-text">Copyright © 2025 CIC by <a href="https://tsdur.com/">TSDUR</a></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('admin/js/sweetalert.min.js')}}"></script>
    <script src="{{asset('admin/js/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('admin/js/main.js')}}"></script>
    <script>
        (function ($) {

            var tfLineChart = (function () {

                var chartBar = function () {

                    var options = {
                        series: [{
                            name: 'Total',
                            data: [0.00, 0.00, 0.00, 0.00, 0.00, 273.22, 208.12, 0.00, 0.00, 0.00, 0.00, 0.00]
                        }, {
                            name: 'Pending',
                            data: [0.00, 0.00, 0.00, 0.00, 0.00, 273.22, 208.12, 0.00, 0.00, 0.00, 0.00, 0.00]
                        },
                        {
                            name: 'Delivered',
                            data: [0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00]
                        }, {
                            name: 'Canceled',
                            data: [0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00]
                        }],
                        chart: {
                            type: 'bar',
                            height: 325,
                            toolbar: {
                                show: false,
                            },
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '10px',
                                endingShape: 'rounded'
                            },
                        },
                        dataLabels: {
                            enabled: false
                        },
                        legend: {
                            show: false,
                        },
                        colors: ['#2377FC', '#FFA500', '#078407', '#FF0000'],
                        stroke: {
                            show: false,
                        },
                        xaxis: {
                            labels: {
                                style: {
                                    colors: '#212529',
                                },
                            },
                            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        },
                        yaxis: {
                            show: false,
                        },
                        fill: {
                            opacity: 1
                        },
                        tooltip: {
                            y: {
                                formatter: function (val) {
                                    return "$ " + val + ""
                                }
                            }
                        }
                    };

                    chart = new ApexCharts(
                        document.querySelector("#line-chart-8"),
                        options
                    );
                    if ($("#line-chart-8").length > 0) {
                        chart.render();
                    }
                };

                /* Function ============ */
                return {
                    init: function () { },

                    load: function () {
                        chartBar();
                    },
                    resize: function () { },
                };
            })();

            jQuery(document).ready(function () { });

            jQuery(window).on("load", function () {
                tfLineChart.load();
            });

            jQuery(window).on("resize", function () { });
        })(jQuery);
    </script>
</body>

</html>
