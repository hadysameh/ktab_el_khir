@extends('layouts.app')

@section('content')
@include('header')

<div class="bradcam_area breadcam_bg overlay2">
    <h3>كتبنا</h3>
</div>

<div class="popular_courses plus_padding">
    <div class="container">
        

    </div>
    <div class="all_courses" dir="ltr">
        <div class="container">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            @foreach ($books as $book)
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    
                                    
                                        <div class="single_courses">
                                            <div class="thumb" style="max-height: 241px">
                                                <a href="#">
                                                <img src="/storage/{{$book->photo}}" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>&ThickSpace;</span>
                                                <h3><a href="#">{{$book->name}} <br>
                                                        </a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        
                                                        <span> 
                                                            @if ($book->pdf != null)
                                                            <a href="/download/{{$book->id}}" class='btn btn-secondary'target="blank">تحميل الكتاب</a>
                                                            @else
                                                            <i class="flaticon-mark-as-favorite-star"></i>
                                                                <span>نسخه مطبوعه</span>

                                                            @endif
                                                        </span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="offer"> </span>
                                                        <span class="active_prise">
                                                            {{$book->user->name}}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                                                        
                                </div>
                            @endforeach
                                
                                <div class="col-xl-12">
                                    <div class="more_courses text-center">
                                        {{$books->links()}}
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6  col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Photoshop</span>
                                            <h3><a href="#">Mobile App design step by step <br>
                                                    from beginner</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/2.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Adobe XD</span>
                                            <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/3.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Wordpress</span>
                                            <h3><a href="#">Wordpress theme development <br>
                                                    from scratch</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/4.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Photoshop</span>
                                            <h3><a href="#">Mobile App design step by step <br>
                                                    from beginner</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <img src="img/courses/5.png" alt="">
                                        </div>
                                        <div class="courses_info">
                                            <span>UI/UX</span>
                                            <h3><a href="#">How to complete user research <br>
                                                    and make work flow</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/6.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Wordpress</span>
                                            <h3><a href="#">Commitment to dedicated <br>
                                                    Support</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="more_courses text-center">
                                        <a href="#" class="boxed_btn_rev">More Courses</a>
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Photoshop</span>
                                            <h3><a href="#">Mobile App design step by step <br>
                                                    from beginner</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/2.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Adobe XD</span>
                                            <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/3.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Wordpress</span>
                                            <h3><a href="#">Wordpress theme development <br>
                                                    from scratch</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/4.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Photoshop</span>
                                            <h3><a href="#">Mobile App design step by step <br>
                                                    from beginner</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <img src="img/courses/5.png" alt="">
                                        </div>
                                        <div class="courses_info">
                                            <span>UI/UX</span>
                                            <h3><a href="#">How to complete user research <br>
                                                    and make work flow</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/6.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Wordpress</span>
                                            <h3><a href="#">Commitment to dedicated <br>
                                                    Support</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="more_courses text-center">
                                        <a href="#" class="boxed_btn_rev">More Courses</a>
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                        <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 ">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Photoshop</span>
                                            <h3><a href="#">Mobile App design step by step <br>
                                                    from beginner</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/2.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Adobe XD</span>
                                            <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/3.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Wordpress</span>
                                            <h3><a href="#">Wordpress theme development <br>
                                                    from scratch</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/4.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Photoshop</span>
                                            <h3><a href="#">Mobile App design step by step <br>
                                                    from beginner</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <img src="img/courses/5.png" alt="">
                                        </div>
                                        <div class="courses_info">
                                            <span>UI/UX</span>
                                            <h3><a href="#">How to complete user research <br>
                                                    and make work flow</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/6.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Wordpress</span>
                                            <h3><a href="#">Commitment to dedicated <br>
                                                    Support</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="more_courses text-center">
                                        <a href="#" class="boxed_btn_rev">More Courses</a>
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="tab-pane fade" id="Web" role="tabpanel" aria-labelledby="Web-tab">
                        <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Photoshop</span>
                                            <h3><a href="#">Mobile App design step by step <br>
                                                    from beginner</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/2.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Adobe XD</span>
                                            <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/3.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Wordpress</span>
                                            <h3><a href="#">Wordpress theme development <br>
                                                    from scratch</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/4.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Photoshop</span>
                                            <h3><a href="#">Mobile App design step by step <br>
                                                    from beginner</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <img src="img/courses/5.png" alt="">
                                        </div>
                                        <div class="courses_info">
                                            <span>UI/UX</span>
                                            <h3><a href="#">How to complete user research <br>
                                                    and make work flow</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/6.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Wordpress</span>
                                            <h3><a href="#">Commitment to dedicated <br>
                                                    Support</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="more_courses text-center">
                                        <a href="#" class="boxed_btn_rev">More Courses</a>
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="tab-pane fade" id="Web1" role="tabpanel" aria-labelledby="Web-tab1">
                        <div class="row">
                                <div class="col-xl-4 col-lg-4  col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Photoshop</span>
                                            <h3><a href="#">Mobile App design step by step <br>
                                                    from beginner</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/2.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Adobe XD</span>
                                            <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/3.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Wordpress</span>
                                            <h3><a href="#">Wordpress theme development <br>
                                                    from scratch</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/4.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Photoshop</span>
                                            <h3><a href="#">Mobile App design step by step <br>
                                                    from beginner</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <img src="img/courses/5.png" alt="">
                                        </div>
                                        <div class="courses_info">
                                            <span>UI/UX</span>
                                            <h3><a href="#">How to complete user research <br>
                                                    and make work flow</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/6.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Wordpress</span>
                                            <h3><a href="#">Commitment to dedicated <br>
                                                    Support</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="more_courses text-center">
                                        <a href="#" class="boxed_btn_rev">More Courses</a>
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="tab-pane fade" id="Web11" role="tabpanel" aria-labelledby="Web-tab11">
                        <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Photoshop</span>
                                            <h3><a href="#">Mobile App design step by step <br>
                                                    from beginner</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/2.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Adobe XD</span>
                                            <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/3.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Wordpress</span>
                                            <h3><a href="#">Wordpress theme development <br>
                                                    from scratch</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/4.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Photoshop</span>
                                            <h3><a href="#">Mobile App design step by step <br>
                                                    from beginner</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <img src="img/courses/5.png" alt="">
                                        </div>
                                        <div class="courses_info">
                                            <span>UI/UX</span>
                                            <h3><a href="#">How to complete user research <br>
                                                    and make work flow</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/6.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Wordpress</span>
                                            <h3><a href="#">Commitment to dedicated <br>
                                                    Support</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="more_courses text-center">
                                        <a href="#" class="boxed_btn_rev">More Courses</a>
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="tab-pane fade" id="Adobe-XD8" role="tabpanel" aria-labelledby="Adobe-XD8">
                        <div class="row">
                                <div class="col-xl-4 col-lg-4  col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Photoshop</span>
                                            <h3><a href="#">Mobile App design step by step <br>
                                                    from beginner</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/2.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Adobe XD</span>
                                            <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/3.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Wordpress</span>
                                            <h3><a href="#">Wordpress theme development <br>
                                                    from scratch</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/4.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Photoshop</span>
                                            <h3><a href="#">Mobile App design step by step <br>
                                                    from beginner</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <img src="img/courses/5.png" alt="">
                                        </div>
                                        <div class="courses_info">
                                            <span>UI/UX</span>
                                            <h3><a href="#">How to complete user research <br>
                                                    and make work flow</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/6.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Wordpress</span>
                                            <h3><a href="#">Commitment to dedicated <br>
                                                    Support</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="more_courses text-center">
                                        <a href="#" class="boxed_btn_rev">More Courses</a>
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="tab-pane fade" id="Adobe-XD9" role="tabpanel" aria-labelledby="Adobe-XD-tab9">
                        <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Photoshop</span>
                                            <h3><a href="#">Mobile App design step by step <br>
                                                    from beginner</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/2.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Adobe XD</span>
                                            <h3><a href="#">UI/UX design with Adobe XD with Anderson</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/3.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Wordpress</span>
                                            <h3><a href="#">Wordpress theme development <br>
                                                    from scratch</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 ">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/4.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Photoshop</span>
                                            <h3><a href="#">Mobile App design step by step <br>
                                                    from beginner</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <img src="img/courses/5.png" alt="">
                                        </div>
                                        <div class="courses_info">
                                            <span>UI/UX</span>
                                            <h3><a href="#">How to complete user research <br>
                                                    and make work flow</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_courses">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="img/courses/6.png" alt="">
                                            </a>
                                        </div>
                                        <div class="courses_info">
                                            <span>Wordpress</span>
                                            <h3><a href="#">Commitment to dedicated <br>
                                                    Support</a></h3>
                                            <div class="star_prise d-flex justify-content-between">
                                                <div class="star">
                                                    <i class="flaticon-mark-as-favorite-star"></i>
                                                    <span>(4.5)</span>
                                                </div>
                                                <div class="prise">
                                                    <span class="offer">$89.00</span>
                                                    <span class="active_prise">
                                                        $49
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="more_courses text-center">
                                        <a href="#" class="boxed_btn_rev">More Courses</a>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>









@endsection