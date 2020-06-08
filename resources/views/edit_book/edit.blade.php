
@extends('layouts.app')

@section('content')
@include('header')

<div class="bradcam_area breadcam_bg overlay2">
    <h3>تعديل الكتاب</h3>
</div>

<div class="container">
<bookform-component :book='{{$book}}' page_name='edit'>
        
        @error('name')
               {{-- error works with the validation --}}
            
                <span slot='name'class="text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            
        @enderror
        @error('photo')
               {{-- error works with the validation --}}
            
                <span slot='photo'class="text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            
        @enderror
        @error('language')
               {{-- error works with the validation --}}
           
                <span slot='language'class="text-danger">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        @error('relegion')
               {{-- error works with the validation --}}
            
                <span slot='relegion'class="text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            
        @enderror
        @error('country')
               {{-- error works with the validation --}}
            
                <span slot='country'class="text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            
        @enderror
        @error('city')
               {{-- error works with the validation --}}
            
                <span slot='city'class="text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            
        @enderror
    </bookform-component>
</div>










@endsection
