@extends('layouts.app')

@section('content')


    <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center " >
                    <div class="col-xl-6 col-md-6">
                        <div class="illastrator_png">
                            <img src="img/banner/edu_ilastration.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 "  >
                        <div class="slider_info" >
                            <h3 class="" > ابحث عن <br>
                                افضل الكتب للدعوة<br>
                                الان </h3>
                            <a href="#" class="boxed_btn">ابدا البحث</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
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
    {{-- <div style="height:70vh;background-image: url('{{asset("img/ktabelkhir.jpg")}}');background-size: cover ;"> --}}

    </div>

    <!-- our_courses_start -->
    <div class="our_courses" style="background:#F0F8FF">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>تخصصنا </h3>
                        <p>نحن نهتم بتوفير كتب الدعوة الي الاديان السماويه  <br>
                            عن طريق توفير الكتب المتاحه في المكتبات المتنوعه من اجل بحث اسهل ووصول الي هدفك اسرع
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon">
                            <i class="flaticon-art-and-design"></i>
                        </div>
                        <h3>افضل جوده</h3>
                        <p>
                            افضل جوده في الكتب المتوفرة والموجوده خلال موقعنا
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon blue">
                            <i class="flaticon-business-and-finance"></i>
                        </div>
                        <h3>افضل جوده</h3>
                        <p>
                            افضل المكتبات الموجوده تعرض افضل كتبها في المجال    
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon">
                            <i class="flaticon-premium"></i>
                        </div>
                        <h3>افضل جوده</h3>
                        <p>
                           سرعه في البحث والوصل الي بيانات التواصل مع المكتبات
                        </p>
                    </div> 
                </div>                
            </div>
        </div>
    </div>
    <!-- our_courses_end -->

    <!-- subscribe_newsletter_Start -->
    
    <!-- subscribe_newsletter_end -->

    <!-- our_latest_blog_start -->
    <div class="py-3">
        <div class="container">
            <h2 class="text-center py-3"> ابحث عن كتاب</h2>
            <form class="text-right" dir="">
                <label for="" style="font-size: 40px;" class="mx-2">اللغه</label>
                <select class="form-control form-control-lg">
                    <option>Large select</option>
                    <option>Large select</option>
                </select>
                <span  class="mx-2"></span>
                <label for="" style="font-size: 40px;" class="mx-2">ديانه</label>
                <select class="form-control form-control-lg">
                    <option>Large select</option>
                    <option>Large select</option>
                </select>
                <span  class="mx-2"></span>
                <label for="" style="font-size: 40px;" class="mx-2">نوع الكتاب</label>
                <select class="form-control form-control-lg">
                    <option>Large select</option>
                    <option>Large select</option>
                </select>
                
                <span  class="mx-2"></span>
                <label for="" style="font-size: 40px;" class="mx-2">الدوله</label>
                <select class="form-control form-control-lg">
                    <option>Large select</option>
                    <option>Large select</option>
                </select>
                
                <span  class="mx-2"></span>
                <label for="" style="font-size: 40px;" class="mx-2">المدينه</label>
                <select class="form-control form-control-lg">
                    <option>Large select</option>
                    <option>Large select</option>
                </select>
                
                <span  class="mx-2"></span>
                <label for="" style="font-size: 40px;" class="mx-2">طريقه الاستلام</label>
                <select class="form-control form-control-lg">
                    <option>Large select</option>
                    <option>Large select</option>
                </select>
                <br>
                <div class="d-flex justify-content-center">
                    <input type="submit" value="ابحث" class="btn btn-lg btn-outline-primary">
                </div>

                
            </form>
        </div>
    </div>
    <!-- our_latest_blog_end -->
    
@endsection
