<div class="sticky-wrapper">
    <div class="sticky-active">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <nav class="main-menu menu-style1 d-none d-lg-block">
                        <ul>
                            <li>
                                <a href="{{ route('home' , app()->getLocale()) }}">{{ __('home') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('about' , app()->getLocale()) }}">{{ __('aboutUs') }}</a>
                            </li>
                            <li class="menu-item-has-children mega-menu-wrap">
                                <a href="{{ route('services', app()->getLocale()) }}"><span class="has-new-lable">{{ __('services') }}</span></a>
                                <ul class="mega-menu">
                                    @foreach($categories as $category)
                                        <li>
                                            <a href="">{{ app()->getLocale() === 'ar' ? $category->name_ar : $category->name_en }}</a> <!-- Use the appropriate language field here -->
                                            <ul>
                                                @foreach($category->services as $service)
                                                    <li><a href="{{ route('service.details', ['locale' => app()->getLocale(), 'id' => $service->id]) }}">{{ app()->getLocale() === 'ar' ?  $service->title_ar : $service->title_en  }}</a></li> <!-- Replace with the desired URL -->
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('projects' , app()->getLocale()) }}">{{ __('projects') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('blog' , app()->getLocale()) }}">{{ __('blog') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('media' , app()->getLocale()) }}">{{ __('packages') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('contact' , app()->getLocale()) }}">{{ __('contact') }}</a>
                            </li>
                        </ul>
                    </nav>
                    <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                </div>
                <div class="col-auto ">
                    <form action="{{ route('search', ['locale' => app()->getLocale()]) }}" method="GET" class="header-search">
                        <input type="text" name="query" placeholder="{{ __('searchHere') }}">
                        <button type="submit" aria-label="search-button"><i class="far fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
