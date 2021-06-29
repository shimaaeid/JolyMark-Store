@include('includes.header')
@include('includes.nav')
@extends('layouts.app2')
@section('content')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                كل المنتجات
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="ما الذي تبحث عنه ؟">
                            <button type="submit" class="site-btn">ابحث</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+966 55 027 0172</h5>
                            <span>متاح 24 ساعه </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <span>كل المنتجات</span>
                        <i class="fa fa-bars"></i>

                    </div>
                    <ul>
                        <li><a href="#">الاحذيه </a></li>
                        <li><a href="#">الشنط</a></li>
                        <li><a href="#">الاكسسوارات</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="public/jolyfrontend/img/th.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>  جولي مارك</h2>
                        <div class="breadcrumb__option">
                        <span> تواصل معنا </span>
                            <a href="./index.php">القائمه الرئيسيه </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>الجوال</h4>
                        <p> +966 55 027 0172</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>العنوان</h4>
                        <p>المدينه المنوره</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>الوقت المتاح </h4>
                        <p>١٠ صباحا الي ١٠ مساء </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>الايميل</h4>
                        <p>jolymark2020@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d464822.0788169004!2d39.89776391444705!3d24.47081407180523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15bdbe5197d220d5%3A0x2e54514fea3b08d9!2z2KfZhNmF2K_ZitmG2Kkg2KfZhNmF2YbZiNix2Kkg2KfZhNiz2LnZiNiv2YrYqQ!5e0!3m2!1sar!2seg!4v1591037450762!5m2!1sar!2seg"
            height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>المدينه المنوره</h4>
                <ul>
                    <li>الجوال: +966 55 027 0172</li>
                    <li>العنوان:jolymark2020@gmail.com</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>اترك رساله</h2>
                    </div>
                </div>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="الايميل">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="اسمك">
                    </div>
                    
                    <div class="col-lg-12 text-center">
                        <textarea placeholder="رسالتك"></textarea>
                        <button type="submit" class="site-btn">ارسل الرساله</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

    <!-- Footer Section Begin -->
    @include('includes.footerLink')
@include('includes.footer')
@endsection