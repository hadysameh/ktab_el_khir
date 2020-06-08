
@extends('layouts.app')

@section('content')
@include('header')

<div class="bradcam_area breadcam_bg overlay2">
    <h3>ابحث عن الكتاب المناسب</h3>
</div>

<div class="container">
    <form action='/search_results' enctype="multipart/form-data" method="get" >
        @csrf
        <input type="hidden" name="_token" :value="csrf">
          <div class="form-group text-right" dir="rtl">
              <label for="language" class="form-label ">لغه الكتاب</label>    
              <input type="text" name="language" class="form-control" id="bookname" >    
                @error('language')
                                    
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    
                @enderror    
          </div>

          <div class="form-group text-right" dir="rtl">
            <label for="relegion" class="form-label ">الديانه الموجه اليها</label>    
            <input type="text" name="relegion" class="form-control" id="bookname" >  
            @error('relegion')
                                            
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                
            @enderror          
         </div>

         <div class="form-group text-right" dir="rtl">
            <label for="country" class="form-label ">الدوله</label>    
            <input type="text" name="country" class="form-control" id="bookname" >        
            @error('country')
                                            
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                
            @enderror    
        </div>

        <div class="form-group text-right" dir="rtl">
            <label for="city" class="form-label ">المدينه</label>    
            <input type="text" name="city" class="form-control" id="bookname" >      
            @error('city')
                                            
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                
            @enderror      
        </div>
          
          <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-primary"> ابحث عن الكتاب</button>
          </div>
          <br>
    </form>
    
</div>










@endsection