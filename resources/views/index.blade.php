
@include('includes.header')
@include('includes.nav')
@extends('layouts.app2')
@section('content')
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+966550270172</h5>
                            <span>متاح 24 ساعه</span>
                        </div>
                    </div>
                    <div class="hero__search__form">
                        <form action="#">
                        <button type="submit" class="site-btn">ابحث</button>                           
                            <input type="text" placeholder=" عن ماذا تبحث ؟" >
                            <div class="hero__search__categories">
                                كل المنتجات
                                <span class="arrow_carrot-down"></span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- start slider -->
                <section class="navSlider">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="public/jolyfrontend/img/shop.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="public/jolyfrontend/img/3bw.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="public/jolyfrontend/img/5.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="public/jolyfrontend/img/7.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                </section>
                                <!-- end slider -->
                        
                <!-- <div class="hero__item set-bg" data-setbg="public/jolyfrontend/img/3bw.jpg"> -->
                    <!-- <div class="hero__text">
                        <span>online shopping</span>
                        <h2>online Shopping <br />100% better</h2>
                        <p>Free Pickup and Delivery Available</p>
                        <a href="#" class="primary-btn">SHOP NOW</a>
                    </div> -->
                <!-- </div> -->
            </div>
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                    <span>كل الاقسام</span>

                        <i class="fas fa-bars"></i>
                    </div>
                    <ul>
                        <li><a href="shoes.php">الأحذية </a></li>
                        <li><a href="bag.php">الشنط</a></li>
                        <li><a href="access.php">الإكسسوارات</a></li>
                        <li><a href="access.php">فساتين سواريه</a></li>
                        <li><a href="access.php">ملابس اطفال</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
	<div class="site-section site-blocks-2">
      <div class="container">
        <div class="row">   
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <a class="block-2-item" href="{{url('Shoes')}}">
              <figure class="image">
                <img src="public/jolyfrontend/img/hero/shoes1.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
               <!-- <span class="text-uppercase">Collections</span>-->
                <h3>أحذية</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="{{url('Bag')}}">
              <figure class="image">
                <img src="public/jolyfrontend/img/hero/bag1.jpeg" alt="" class="img-fluid">
              </figure>
              <div class="text">
               <!-- <span class="text-uppercase">Collections</span>-->
                <h3>شنط</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="public/jolyfrontend/img/hero/acc2.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
               <!-- <span class="text-uppercase">Collections</span>-->
                <h3>إكسسوارات</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0 mt-4" data-aos="fade" data-aos-delay="">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="public/jolyfrontend/img/hero/se.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
               <!-- <span class="text-uppercase">Collections</span>-->
                <h3>فساتين سواريه</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0 mt-4" data-aos="fade" data-aos-delay="">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="public/jolyfrontend/img/hero/ch.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
               <!-- <span class="text-uppercase">Collections</span>-->
                <h3>ملابس اطفال</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0 mt-4" data-aos="fade" data-aos-delay="">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="public/jolyfrontend/img/hero/me2.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
               <!-- <span class="text-uppercase">Collections</span>-->
                <h3>ملابس رجال</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
</section>  

<section class="categories mt-5">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg back">
							<img src="public/jolyfrontend/img/categories/3800-1.jpg" class="photo">
                            <h5><a href="#"> كوتشي</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg back">
                        <img src="public/jolyfrontend/img/categories/6135.jpg" class="photo">
                            <h5><a href="#"> جزمه </a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg back">
                        <img src="public/jolyfrontend/img/categories/ring4.jpeg" class="photo">
                            <h5><a href="#"> خاتم</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg back">
                        <img src="public/jolyfrontend/img/categories/2.jpg" class="photo">
                            <h5><a href="#"> ساعه حريمي</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg back">
                        <img src="public/jolyfrontend/img/categories/eyee.jpg" class="photo">
                            <h5><a href="#"> نظاره </a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
			
			
			   <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>المنتجات المميزه</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li data-filter=".fresh-meat">الإكسسوارات</li>
                            <li data-filter=".vegetables">الشنط</li>
                            <li data-filter=".fastfood">الاحذية</li>
							<li class="active" data-filter="*">الكل</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="public/jolyfrontend/img/categories/bag.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">شنطه حريمى</a></h6>
                           <h5>ب 30 ريال</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="public/jolyfrontend/img/categories/menwatch.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">ساعه رجالى</a></h6>
                            <h5>ب 30 ريال</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="public/jolyfrontend/img/categories/slsla.png">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">سلسله</a></h6>
                           <h5>ب 30 ريال</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="public/jolyfrontend/img/categories/1.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">أسوره</a></h6>
                            <h5>ب 30 ريال</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="public/jolyfrontend/img/categories/ring4.jpeg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">خاتم</a></h6>
                            <h5>ب 30 ريال</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="public/jolyfrontend/img/categories/shoes.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">حذاء</a></h6>
                            <h5>ب 30 ريال</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="public/jolyfrontend/img/categories/bag2.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">شنطه</a></h6>
                            <h5>ب 30 ريال</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="public/jolyfrontend/img/categories/ll.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">حلق</a></h6>
                            <h5>ب 30 ريال</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
			
        </div>
    </section>
    <section class="parteners mt-3">
        <div class="container">
            <div class="section-title">
                <h2> شركائنا</h2>
            </div>
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg back">
							<img src="public/jolyfrontend/img//child.jpg" class="photo">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg back">
                        <img src="public/jolyfrontend/img/categories/6135.jpg" class="photo">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg back">
                        <img src="public/jolyfrontend/img/ye.jpg" class="photo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- </section> -->
    <section class="review mt-5">  
        <div class="section-title">
            <h2> اراء العملاء</h2>
        </div> 
        <div class="col-lg-10 offset-lg-1 pt-5 pb-5 bg-dark text-light">
        <div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel" style="height:200px;">
            <div class="carousel-inner" role="listbox">
            <div class="carousel-item active text-center p-4">
             <div class="img-box"><img src="public/jolyfrontend/img/re.jpg" height="50" alt=""></div>

                <blockquote class="blockquote text-center">
                <p class="mb-0"><i class="fa fa-quote-left"></i> التعامل مريح جدا وسريع
                </p>
                <footer class="blockquote-footer">يوسف السيد <cite title="Source Title"></cite></footer>
                <!-- Client review stars -->
                <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                <p class="client-review-stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="far  fa-star"></i>
                    <i class="far fa-star"></i>
                </p>
                </blockquote>
            </div>
            <div class="carousel-item text-center p-4">
                <div class="img-box"><img src="public/jolyfrontend/img/re.jpg" height="50" alt=""></div>
                <blockquote class="blockquote text-center">
                <p class="mb-0"><i class="fa fa-quote-left"></i> الخدمه ممتازه جدا 
                </p>
                <footer class="blockquote-footer">ناجي محمد <cite title="Source Title"></cite></footer>
                <!-- Client review stars -->
                <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                <p class="client-review-stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </p>
                </blockquote>

            </div>
            <div class="carousel-item text-center p-4">
            <div class="img-box"><img src="public/jolyfrontend/img/re.jpg" height="50" style="border-radius:100%" alt=""></div>

                <blockquote class="blockquote text-center">
                <p class="mb-0"><i class="fa fa-quote-left"></i> التعامل رائع
                </p>
                <footer class="blockquote-footer">احمد محمود <cite title="Source Title"></cite></footer>
                <!-- Client review stars -->
                <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                <p class="client-review-stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </p>
                </blockquote>

            </div>
            </div>
            <ol class="carousel-indicators">
            <li data-target="#client-testimonial-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#client-testimonial-carousel" data-slide-to="1"></li>
            <li data-target="#client-testimonial-carousel" data-slide-to="2"></li>
            </ol>
        </div>
        </div>
    </section>

@include('includes.footerLink')
@include('includes.footer')
@endsection