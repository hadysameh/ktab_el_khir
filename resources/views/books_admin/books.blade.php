@extends('layouts.app')

@section('content')
@include('header')

<div class="bradcam_area breadcam_bg overlay2">
    <h3>جميع كتب الموقع</h3>
</div>

<div class="popular_courses plus_padding">
    <div class="container">
        

    </div>
    <div class="all_courses" dir="ltr">
        <div class="container">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            @if(count($books)>0)
                            @foreach ($books as $book)
                                <div class="col-xl-4 col-lg-4 col-md-6 text-right">
                                    
                                    
                                        <div class="single_courses">
                                            <div class="thumb" style="max-height: 241px">
                                                <a href="#">
                                                <img src="/storage/{{$book->photo}}" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>&ThickSpace;</span>
                                                <h3><a >اسم المكتبه : {{$book->user->name}}</a></h3>
                                                <h3><a >اسم الكتاب : {{$book->name}}</a></h3>
                                                <h3><a >اللغه : {{$book->language}}</a></h3>
                                                <h3><a >الدين الموجه اليه : {{$book->relegion}}</a></h3>
                                                <h3><a >الدوله المتوفر بها : {{$book->country}}</a></h3>
                                                <h3><a >تصنيف الكتاب : {{$book->category}}</a></h3>
                                                <h3><a >توصيه : {{$book->recommendation}}</a></h3>
                                                <h3><a >نوع نسخه الكتاب : {{$book->pdf ?"الكترونيه":'مطبوعه' }}</a></h3>
                                                
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                        
                                                        <span> 
                                                            {{-- @if ($book->pdf != null)
                                                            <a href="/download/{{$book->id}}" class='btn btn-secondary'target="blank">تحميل الكتاب</a>
                                                            @else
                                                            <i class="flaticon-mark-as-favorite-star"></i>
                                                                <span>نسخه مطبوعه</span>

                                                            @endif --}}
                                                            <a href="/edit/{{$book->id}}" class='btn btn-secondary'>تعديل الكتاب</a>
                                                        </span>
                                                    </div>
                                                    <div class="prise">
                                                        <span class="active_prise">
                                                            <form action="/deletebook/{{$book->id}}}" method="post">
                                                                <input class="btn btn-danger" type="submit" value="حذف الكتاب" />
                                                                <input type="hidden" name="_method" value="delete" />
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            </form>
                                                            {{-- <a href="/download/{{$book->id}}" class='btn btn-danger'target="blank">حذف الكتاب</a> --}}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                                                        
                                </div>
                            @endforeach
                            @else
                            <h2 class="text-center w-100">عفوا مكتبتك فارغه رجاء اضف الكتب التي تريدها ان تظهر في نتائج البحث</h2>

                            @endif
                            
                                
                                <div class="col-xl-12">
                                    <div class="more_courses text-center">
                                        {{$books->links()}}
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