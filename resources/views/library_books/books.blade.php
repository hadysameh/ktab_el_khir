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
                                                            {{-- @if ($book->pdf != null)
                                                            <a href="/download/{{$book->id}}" class='btn btn-secondary'target="blank">تحميل الكتاب</a>
                                                            @else
                                                            <i class="flaticon-mark-as-favorite-star"></i>
                                                                <span>نسخه مطبوعه</span>

                                                            @endif --}}
                                                            <a href="/edit/{{$book->id}}" class='btn btn-secondary'target="blank">تعديل الكتاب</a>
                                                        </span>
                                                    </div>
                                                    <div class="prise">
                                                        {{-- <span class="offer"> </span> --}}
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









@endsection