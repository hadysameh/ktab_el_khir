@extends('layouts.app')

@section('content')
@include('header')

<div class="bradcam_area breadcam_bg overlay2">
    <h3>اضف كتاب</h3>
</div>

<div class="container">
    {

    <form action="postbook" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="form-group text-right" dir="rtl">
            <label for="book_name" class="form-label ">اسم الكتاب</label>
            <input type="text" name="book_name" class="form-control" id="bookname" >
            @error('book_name')
                    
                    
                    <span  class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                
            @enderror
        </div>
        <div class="form-group text-right" dir="rtl">
            <label for="book_photo" class="form-label ">صورة الكتاب</label>
            <div>
                <input type="file" name="book_photo" class="" id="bookname" >
            </div>
            @error('photo')
                    
                    
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                
            @enderror
        </div>
        <div class="form-group text-right" dir="rtl">
            <label for="book_lang" class="form-label ">لغه الكتاب</label>
            <input  type="text" name="book_lang" class="form-control" >
            
            @error('book_lang')
                    
                    
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                
            @enderror
        </div>
        <div class="form-group text-right" dir="rtl">
            <label for="country" class="form-label "> الدوله المتاح بها</label>
            <input  type="text" name="country" class="form-control" id="bookname" >
            
            @error('target_relegion')
                    
                    
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                
            @enderror
            
            
        </div>
        <div class="form-group text-right" dir="rtl">
            <label for="target_relegion" class="form-label ">الديانة الموجه لها</label>
            <input type="text" name="target_relegion" class="form-control" id="bookname" >
            
            @error('target_relegion')
                    
                    
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                
            @enderror
            
        </div>
        <div class="form-group text-right" dir="rtl">
            <label for="category" class="form-label "> تصنيف الكتاب</label>
            <input  type="text" name="category" class="form-control" id="bookname" >
            
            @error('category')
                    
                    
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                
            @enderror
            
            
        </div>
        
        
        <div class="form-group text-right" dir="rtl" >
            <label for="book_file" class="form-label ">ملف الكتاب (max:5MB)اذا كانت نسخه الكترونيه</label>
            <div>
                <input type="file" name="book_file" class="" id="bookname" >
            </div>
            
        </div>

        <br>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary"> حفظ الكتاب</button>
        </div>
        <br>
    </form>
</div>








@include('footer')

@endsection
