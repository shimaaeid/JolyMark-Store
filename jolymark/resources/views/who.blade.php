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
                        <h2>جولي مارك</h2>
                        <div class="breadcrumb__option">
                        <span> من نحن ؟</span>
                            <a href="{{url('/')}}">القائمه الرئيسيه </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- Breadcrumb Section End -->
	<section class="who py-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h4 class="text-center">
					تأسست جولى مارك عام 2020 ميلادي هدفنا الرئيسي ان نكون مختلفين عن الجميع في الإصدارات المميزة والتي تجعل المظهر الخارجي يلفت الانتباه و نقدم خدمات ما قبل وما بعد البيع
					</h4>
				
				</div>
			</div>
		</div>
</section>

    <!-- Contact Form End -->

    <!-- Footer Section Begin -->
@include('includes.footerLink')
@include('includes.footer')
@endsection