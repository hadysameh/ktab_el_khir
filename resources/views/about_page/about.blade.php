@extends('layouts.app')

@section('content')
@include('header')
<!-- header-end -->

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay2">
        <h3>عن الحمله</h3>
    </div>


    <div class="about_area" style="background: #f4f4f4">
        <div class="container">
            <h3 class="text-center" style="font-size: 50px">هدفنا</h3>
            <p class="py-3 text-right" style="font-size:30px; line-height: 42px">
                من افضل وسائل التعريف بالاسلام الكتاب ولكي تستطيع ان تتعرف بالاسلام بكل سهول ما عليك الا ان تطلب الكتاب وبالطريقه التي ترغب بها يمكنك البحث عن كتاب الكتروني ( تستطيع ان تقوم بتحميله على جهازك) او التواصل مع المكتبه من اجل ان تحصل على نسختك الورقيه 
            </p>
            <p class="text-center" style="font-size:30px; line-height: 40px">
                فقط اضغط هنا
                <div class="text-center">
                    <a href="/search" class="btn btn-lg btn-secondary">ابدا الان </a>
                </div>
            </p>
        </div>
    </div>

    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="single_about_info">
                        <h3 class='text-right'>العديد من كتب الدعوه <br>
                            خلال العديد من المكاتب</h3>
                        <p class='text-right'>لدينا العديد من كتب الدعوة التي تنساب جميع الافراد والاجناس والاعمار ايا كانت ديانه الشخص يمكنك الحصول على افضل الكتب المناسبه لك</p>
                        <a href="#" class="boxed_btn">البحث عن كتاب</a>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6">
                    <div class="about_tutorials">
                        <div class="courses">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span>20+</span>
                                    <p> مكتبه</p>
                                </div>
                            </div>
                        </div>
                        <div class="courses-blue">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span>7638</span>
                                    <p> كتاب</p>
                                </div>

                            </div>
                        </div>
                        <div class="courses-sky">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span>230+</span>
                                    <p> مستخدم</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('footer')

@endsection
