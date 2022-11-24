<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> alaaqaouq1998@gmail.com</li>
                            {{-- <li>Free Shipping for all Order of $99</li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="header__top__right__language">
                            <img src="{{ asset('assets/frontend2/img/language.png') }}" alt="">
                            <div>English</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                {{-- <li><a href="#">Arabic</a></li> --}}
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                        <div class="header__top__right__auth">


                            @guest
                                @if (Route::has('login'))
                                    <a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
                                @endif

                                @if (Route::has('register'))
                                    {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> --}}
                                    <a href="{{ route('register') }}"><i class="fa fa-user"></i> Register</a>
                                @endif
                            @else
                                <div class="header__top__right__language">
                                    <div> {{ Auth::user()->fname }} </div>
                                    <span class="arrow_carrot-down"></span>
                                    <ul>
                                        <li> <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                                <i class="fa fa-user"></i>
                                            </a>
                                        </li>

                                    </ul>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>


                            @endguest



                            {{-- <a href="{{route('login')}}"><i class="fa fa-user"></i> Login</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="./index.html"><img src="{{ asset('assets/frontend2/img/logo12.png') }}" alt="Logo"></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active">
                            <a href="{{ route('/') }}">Home</a>
                        </li>
                        <li><a href="{{ route('shoping') }}">Shop</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="{{ route('shoping') }}">Shop Details</a></li>
                                <li><a href="{{ route('producte_all') }}">ALL Product</a></li>
                                <li><a href="{{ route('cart') }}">Shoping Cart</a></li>
                                <li><a href="{{ route('checkout') }}">Check Out</a></li>
                                {{-- <li><a href="#">Blog</a></li> --}}
                            </ul>
                        </li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>

                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    @if (session('cart'))
                        @php
                            $total = 0;
                        @endphp

                        @foreach (session('cart') as $id => $details)
                            @php
                                $count = $loop->count;
                                $total += $details['original_price'] * $details['quantity'];
                            @endphp
                        @endforeach

                        <ul>
                            {{-- <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li> --}}
                            <li><a href="{{ route('cart') }}"><i class="fa fa-shopping-bag"></i> <span>
                                        {{ $count }}</span></a></li>
                        </ul>

                        <div class="header__cart__price">item: <span>${{ $total }}</span></div>
                    @else
                        <ul>
                            {{-- <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li> --}}
                            <li><a href="{{ route('cart') }}"><i class="fa fa-shopping-bag"></i> <span>0</span></a>
                            </li>
                        </ul>

                        <div class="header__cart__price">item: <span>$00.00</span></div>
                    @endif
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->


<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Categories</span>
                    </div>
                    <ul>
                        @foreach ($categories as $category)
                            <li><a
                                    href="{{ route('product_by_category', [$category->slug, $category->name]) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="{{ route('result_search') }}">
                            {{-- <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div> --}}
                            <input type="text" placeholder="What do you need?" name="search"
                                value="{{ request()->query('search', '') }}">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+963 999999999</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->
