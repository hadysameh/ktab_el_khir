@extends('layouts.app')

@section('content')
    @include('main_page.header')

    <!-- slider_area_start -->
    <div class="slider_area " dir='ltr'>
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center " >
                    <div class="col-xl-6 col-md-6">
                        <div class="illastrator_png">
                            <img src="img/banner/edu_ilastration.png" alt="">
                        </div>
                        <div class="text-center text-white">
                            للتواصل من اجل انشاء حساب مكتبه برجاء التواصل خلال <br>
                            +966 59 857 6644
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 "  >
                        <div class="slider_info text-lg-right" >
                            <h3 class="" dir=""> ابحث عن افضل <br>
                                  الكتب للدعوة الان<br>
                                 </h3>
                            <a href="/search" class="boxed_btn">ابدا البحث</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    {{-- <div class="our_courses" style="background:#F0F8FF">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>حياك الله في منصه كتاب الخير </h3>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon">
                            <i class="flaticon-art-and-design"></i>
                        </div>
                        <h3>مكتبه دعوة لديكم كتب دعوية تريد اضافتها في الموقع؟</h3>
                        
                        <a href="/addbook" class="btn btn-secondary">تفضل من هنا  </a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon blue">
                            <i class="flaticon-business-and-finance"></i>
                        </div>
                        <h3>هل تريد التعرف علينا اكثر</h3>
                        <br>
                        <a href="/about" class="btn btn-secondary">تفضل من هنا  </a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon">
                            <i class="flaticon-premium"></i>
                        </div>
                        <h3>تريد كتاب تتعرف به على الاسلام؟</h3>
                        <br>
                        <a href="/search" class="btn btn-secondary">تفضل من هنا  </a>
                    </div> 
                </div>                
            </div>
        </div>
    </div> --}}

    <!-- about_area_start -->
    {{-- <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="single_about_info">
                        <h3 class='text-right'>العديد من كتب الدعوه <br>
                            خلال العديد من المكاتب</h3>
                        <p class='text-right'>لدينا العديد من كتب الدعوة التي تنساب جميع الافراد والاجناس والاعمار ايا كانت ديانه الشخص يمكنك الحصول على افضل الكتب المناسبه لك</p>
                        <a href="/search" class="boxed_btn">البحث عن كتاب</a>
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
    </div> --}}
    {{-- <div style="height:70vh;background-image: url('{{asset("img/ktabelkhir.jpg")}}');background-size: cover ;"> --}}

    </div>

    
@endsection
