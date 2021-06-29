@include('includes.header')
@include('includes.nav')
@extends('layouts.app2')
@section('content')
 <section class="breadcrumb-section set-bg" data-setbg="public/jolyfrontend/img/th.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>جولى مارك</h2>
                        <div class="breadcrumb__option">
                            <span>حذاء ذو كعب عالى</span>
							<a href="./shoes.php">احذيه</a>
							<a href="index.php">القائمه الرئيسيه</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6> هل تمتلك كوبون ؟ <a href="#">اضغط هنا</a>  لكى تدخل الكود الخاص بك
                    <span class="icon_tag_alt"></span>
					</h6>
                </div>
            </div>
			
            <div class="checkout__form">
                <h4>تفاصيل الفاتوره</h4>
				<div style="clear:both"></div>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6" style="text-align: right;">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p style="direction:rtl">الاسم الاول</p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>الاسم الثانى</p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>الدولة</p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>العنوان</p>
                                <input type="text" placeholder="الشارع الرئيسى" class="checkout__input__add">
                                <input type="text" placeholder="الحى او المنطقه">
                            </div>
                            <div class="checkout__input">
                                <p>المدينه</p>
                                <input type="text">
                            </div>
                           
                            <div class="checkout__input">
                                <p>المنطقه البريديه / الرمز البريدى</p>
                                <input type="text">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>رقم الجوال</p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>عنوان البريد الالكترونى</p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                     
                            <div class="checkout__input">
                                <p>اضف ملاحظاتك للطلب</p>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>الطلب الخاص بك</h4>
								<div style="clear:both"></div>
                                <div class="checkout__order__products">الاجمالى <span>المنتجات</span></div>
                                <ul>
                                    <li>SR 75.99<span>احذيه</span></li>
                                    <li>SR 151.99<span>شنط</span></li>
                                    <li>SR 53.99<span>اكسسوارات</span></li>
                                </ul>
                                <div class="checkout__order__subtotal">SR 750.99<span>مبلغ الاجمالى</span></div>
                                <div class="checkout__order__total">SR 750.99<span>المبلغ</span></div>
                          
				<h4>تفاصيل الدفع</h4>
								
								
								
				 <div class="border p-3 mb-3" >
                    <h3 class="h6 mb-0"><a class="d-block text-center" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">دفع عند الاستلام <i class="fas fa-money-check-alt"></i></a></h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2">
                        <p class="mb-0 text-center">يمكنك دفع المبلغ المطلوب عند استلام الطلب</p>
                      </div>
						
						<form>
							  <div class="form-group">
								<label for="exampleInputEmail1" style="direction:rtl;float:right">ادخل العنوان</label>
								<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
								<small id="emailHelp" class="form-text text-muted">لا يمكن مشاركه هذا العنوان مع اى شخص اخر</small>
							  </div>
							  <div class="form-group">
								<label for="exampleInputPassword1" style="direction:rtl;float:right">رقم الجوال للتواصل مع المندوب</label>
								<input type="tel" class="form-control" id="exampleInputPassword1">
							  </div>
							  
							  <button type="submit" class="btn btn-primary">ارسال</button>
						</form>
						
                    </div>
                  </div>
								
								
								
								<div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block text-center" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque"> بطاقه ائتمان  <i class="far fa-credit-card"></i></a></h3>

                    <div class="collapse" id="collapsecheque">
                      <div class="py-2">
                        <p class="mb-0 text-center">يمكنك الدفع من خلال بطاقه الائتمان</p>
                      </div>
						
							<p class="alert alert-success">Some text success or error</p>
	<form role="form">
	<div class="form-group">
		<label for="username" style="direction:rtl;float:right">ادخل الاسم الكامل (على البطاقه)</label>
		<input type="text" class="form-control" name="username" placeholder="" required="">
	</div> <!-- form-group.// -->

	<div class="form-group">
		<label for="cardNumber" style="direction:rtl;float:right">رقم البطاقه</label>
		<div class="input-group">
			<input type="text" class="form-control" name="cardNumber" placeholder="">
			<div class="input-group-append">
				<span class="input-group-text text-muted">
					<i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>   
					<i class="fab fa-cc-mastercard"></i> 
				</span>
			</div>
		</div>
	</div> <!-- form-group.// -->

	<div class="row">
	    <div class="col-sm-8">
	        <div class="form-group">
	            <label><span class="hidden-xs">انتهاء الصلاحيه للكارت</span> </label>
	        	<div class="input-group">
	        		<input type="number" class="form-control" placeholder="MM" name="">
		            <input type="number" class="form-control" placeholder="YY" name="">
	        	</div>
	        </div>
	    </div>
	    <div class="col-sm-4">
	        <div class="form-group">
	            <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV</label>
	            <input type="number" class="form-control" required="">
	        </div> <!-- form-group.// -->
	    </div>
	</div> <!-- row.// -->
		 <div class="form-group">
								<label for="exampleInputEmail1" style="direction:rtl;float:right">ادخل العنوان</label>
								<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
								<small id="emailHelp" class="form-text text-muted">لا يمكن مشاركه هذا العنوان مع اى شخص اخر</small>
							  </div>
							  <div class="form-group">
								<label for="exampleInputPassword1" style="direction:rtl;float:right">رقم الجوال للتواصل مع المندوب</label>
								<input type="tel" class="form-control" id="exampleInputPassword1">
							  </div>
		
	<button class="subscribe btn btn-primary btn-block" type="button"> تأكيد  </button>
	</form>
						
						
                    </div>				
                  </div>
								
								
								
								
								<div class="border p-3 mb-5">
                    <h3 class="h6 mb-0"><a class="d-block text-center " data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal <i class="fab fa-paypal"></i></a></h3>

                    <div class="collapse" id="collapsepaypal">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>
													
								
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    @include('includes.footerLink')
@include('includes.footer')
@endsection