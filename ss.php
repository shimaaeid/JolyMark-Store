<body>
  

       <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper " style=" text-align:right;">
        <div class="humberger__menu__logo">
            <a href="#"><img src="../jolyfrontend/img/logo2.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fas fa-heart text-black"></i> <span>1</span></a></li>
                <li><a href="{{url('ShopCart')}}"><i class="fas fa-shopping-bag text-black"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">الصنف: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language" style=" direction: rtl;">
                <img src="../jolyfrontend/img/language.png" alt="">
                <div>عربي</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">عربي</a></li>
                    <li><a href="#">انجليزي</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth" style=" direction: rtl;">
                <a href="{{url('/login')}}"><i class="fa fa-user"></i> دخول</a>

            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{url('/')}}">القائمه الرئيسيه</a></li>
                <li><a href="#">منتجاتنا</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="{{url('Shoes')}}">احذيه</a></li>
                        <li><a href="{{url('Bag')}}">شنط</a></li>
                        <li><a href="{{url('/access')}}">اكسسوارات</a></li>
                        <li><a href="#">فساتين سواريه</a></li>
                    </ul>
                </li>
                <li><a href="{{url('Checkout')}}">الدفع</a></li>
                <li><a href="{{url('/Who')}}"> من نحن ؟</a></li>
                <li><a href="{{url('Contact')}}">تواصل معنا</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li>jolymark2020@gmail.com <i class="fa fa-envelope"></i> </li>
                <li>شحن مجانى عند شرائك 1000 ريال</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fas fa-envelope"></i>  jolymark2020@gmail.com</li>
                                <li>شحن مجانى عند شرائك 1000 ريال</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right " >
                            <div class="header__top__right__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>

                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language " style=" direction: rtl; text-align: right;">
                                <img src="../jolyfrontend/img/language.png" alt="">
                                <div>عربي</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">عربي</a></li>
                                    <li><a href="#">انجليزي</a></li>
                                </ul>
                            </div>
                            @guest
                            <div class="header__top__right__auth" style=" direction: rtl;">
                            @if (Route::has('register'))
                            <a href="{{url('/login')}}"><i class="fa fa-user"></i> دخول</a>
                            @endif
                            </div>
                            @else
            
                            <div class="header__top__right__language " style=" direction: rtl; text-align: right;">
                                <!-- @php
                                 $path =  auth()->user()->photo;
                                @endphp
                                <img src='{{ url("/user/img/$path") }}' alt="User Photo" class="image-cover mr-2"> -->

                                <!-- <img src= "../jolyfrontend/img/log.png" alt=""> -->
                                <img src="public/jolyfrontend/img/log.png" alt="" width="25">
                                <div> {{ Auth::user()->name }}</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li>   
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container " style=" direction: rtl;">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo" ">
                        <a href="{{url('/')}}"><img src="../jolyfrontend/img/logo2.png"  alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                        <li class="active"><a href="{{url('/')}}">القائمه الرئيسيه</a></li>
                        <li><a href="#">منتجاتنا</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="{{url('Shoes')}}">احذيه</a></li>
                                <li><a href="{{url('Bag')}}">شنط</a></li>
                                <li><a href="{{route('acc')}}">اكسسوارات</a></li>
                                <li><a href="#">فساتين سواريه</a></li>       
                                <li><a href="#"> ملابس اطفال</a></li>
                                <li><a href="#"> ملابس مواليد</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('Checkout')}}">الدفع</a></li>

                        <li><a href="{{url('/who')}}">من نحن ؟</a></li>
                        <li><a href="{{url('Contact')}}">تواصل معنا</a></li>

                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fas fa-heart text-black carticon"></i> <span>1</span></a></li>
                            <li><a href="{{url('ShopCart')}}"><i class="fas fa-shopping-bag text-black carticon"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">الصنف: <span>$150.00</span></div>

                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->