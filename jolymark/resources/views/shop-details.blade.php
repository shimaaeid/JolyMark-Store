
 @include('includes.header')
@include('includes.nav')
@extends('layouts.app2')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="public/jolyfrontend/img/th.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>   جولي مارك</h2>
                        <div class="breadcrumb__option " style="direction:rtl">
                            <a href="index.php">القائمه الرئيسيه</a>
                            <a href="./shoes.php">احذيه</a>
                            <span>حذاء ذو كعب عالى</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="public/jolyfrontend/img/bag/10.png" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="public/jolyfrontend/img/bag/10.png"
                                src="public/jolyfrontend/img/bag/10.png" alt="">
                            <img data-imgbigurl="img/bag/7.jpg"
                                src="public/jolyfrontend/img/bag/7.jpg" alt="">
                            <img data-imgbigurl="public/jolyfrontend/img/bag/239-3.jpg"
                                src="public/jolyfrontend/img/bag/239-3.jpg" alt="">
                            <img data-imgbigurl="public/jolyfrontend/img/bag/6135-2.jpg"
                                src="public/jolyfrontend/img/bag/6135-2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text"style="text-align: right;">
                        <h3>حذاء ذو كعب عالي </h3>
                        <div class="product__details__rating">
                        <span>(  ١٨ تقييم    )</span>
                            <i class="far fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__details__price"> ٥٠ ريال سعودي   </div>
                        <p>فخامه - اناقه - ارتداء حذاء مميز</p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">اضف الي السله</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>متوفر</b> <span>في المخزن</span></li>
                            <li><b>الشحن</b> <span>يوم واحد. <samp>توصيل مجاني اليوم</samp></span></li>
                            <li><b>الوزن</b> <span>0.5 kg</span></li>
                            <li><b>شارك علي </b>
                                <div class="share">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>المنتجات ذات الصلة</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="public/jolyfrontend/img/bag/2.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">كوتشي</a></h6>
                            <h5>٤٠ ريال</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="public/jolyfrontend/img/bag/4.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">كوتشي</a></h6>
                            <h5>٤٠ ريال</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="public/jolyfrontend/img/bag/6.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">كوتشي</a></h6>
                            <h5>٦٠ ريال</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="public/jolyfrontend/img/bag/5.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">كوتشي</a></h6>
                            <h5>٦٠ ريال</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->
    @include('includes.footerLink')
@include('includes.footer')
@endsection
