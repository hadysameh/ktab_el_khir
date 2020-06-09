@extends('layouts.app')

@section('content')
@include('header')

<div class="bradcam_area breadcam_bg overlay2">
    <h3>نتائج البحث</h3>
</div>

<div class="popular_courses plus_padding">
    <div class="container">
        

    </div>
    <div class="all_courses" dir="ltr">
        <div class="container">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row ">
                            @if(count($books)>0)
                            @foreach ($books as $book)
                                <div class="col-xl-4 col-lg-4 col-md-6 text-right" >
                                    
                                    
                                        <div class="single_courses">
                                            <div class="thumb" style="max-height: 241px">
                                                <a href="#">
                                                <img src="/storage/{{$book->photo}}" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info" dir="rtl">
                                                <span>&ThickSpace;</span>
                                            <h3><a >اسم المكتبه : {{$book->user->name}}</a></h3>
                                            <h3><a >البريد الالكتروني : {{$book->user->email}}</a></h3>
                                            <h3><a >اسم الكتاب : {{$book->name}}</a></h3>
                                            <h3><a >اللغه : {{$book->language}}</a></h3>
                                            <h3><a >الدين الموجه اليه : {{$book->relegion}}</a></h3>
                                            <h3><a >الدوله المتوفر بها : {{$book->country}}</a></h3>
                                            <h3><a >المدينه المتوفر بها : {{$book->city}}</a></h3>
                                            <h3><a >نوع نسخه الكتاب : {{$book->pdf ?"الكترونيه":'مطبوعه' }}</a></h3>
                                            @if($book->pdf )
                                                <a href="/download/{{$book->id}}" class='btn btn-secondary'target="blank">تحميل الكتاب</a>
                                                

                                            @endif
                                            <br>

                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">                                                        
                                                        <span>                                                             
                                                            اسم المكتبه: {{$book->user->name}}
                                                        </span>
                                                    </div>
                                                    <div class="prise">
                                                        
                                                        <span class="active_prise">
                                                            
                                                            
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
                            @else
                            <h2 class="text-center w-100">عفوا لم يتم العثور على كتاب ملائم للمعطيات</h2>
                        @endif  
                </div>
               
            </div>
        </div>
    </div>
</div>








@include('footer')
@endsection