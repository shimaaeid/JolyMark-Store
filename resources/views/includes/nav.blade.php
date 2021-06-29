<body>
       <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper " style=" text-align:right;">
        <div class="humberger__menu__logo">
            <a href="#"><img src="public/jolyfrontend/img/logo2.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fas fa-heart text-black"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fas fa-shopping-bag text-black"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">الصنف: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language" style=" direction: rtl;">
                <img src="public/jolyfrontend/img/language.png" alt="">
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
                <li class="active"><a href="./index.html">القائمه الرئيسيه</a></li>
                <li><a href="#">منتجاتنا</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">احذيه</a></li>
                        <li><a href="./shoping-cart.html">شنط</a></li>
                        <li><a href="./checkout.html">اكسسوارات</a></li>
                        <li><a href="./blog-details.html">فساتين سواريه</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">الدفع</a></li>
                <li><a href="./contact.html">تواصل معنا</a></li>
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
                                <img src="public/jolyfrontend/img/language.png" alt="">
                                <div>عربي</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">عربي</a></li>
                                    <li><a href="#">انجليزي</a></li>
                                </ul>
                            </div>
                            @guest
                            <div class="header__top__right__auth" style=" direction: rtl;">
                            <a href="{{url('/login')}}"><i class="fa fa-user"></i> دخول</a>

                                <!-- <a href="{{ route('login') }}"><i class="fa fa-user"></i> دخول</a>
                                @if (Route::has('register'))
                                <a  href="{{ route('register') }}"><i class="fa fa-user"></i> تسجيل الدخول </a>
                            @endif -->
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
                        <a href="./index.php">
											 <img src="public/jolyfrontend/img/logo2.png"></a>
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
                                <li><a href="./checkout.html">اكسسوارات</a></li>
                                <li><a href="./blog-details.html">فساتين سواريه</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('Checkout')}}">الدفع</a></li>
                        <li><a href="{{url('/who')}}"> من نحن</a></li>
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
	
	
	