<template>
  <form :action='form_action' enctype="multipart/form-data" method="POST" >
      <input type="hidden" name="_token" :value="csrf">
        <div class="form-group text-right" dir="rtl">
            <label for="book_name" class="form-label ">اسم الكتاب</label>
            <input v-if="book_data" type="text" name="book_name" class="form-control" id="bookname" :value=book_data.name>
            <input v-else type="text" name="book_name" class="form-control" id="bookname" >
            <slot name='name'></slot>
        </div>
        <div class="form-group text-right" dir="rtl">
            <label for="book_photo" class="form-label ">صورة الكتاب</label>
            <div>
                <input type="file" name="book_photo" class="" id="bookname" >
            </div>
            <slot name='photo'></slot>
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group text-right" dir="rtl">
            <label for="book_lang" class="form-label ">لغه الكتاب</label>
            <input v-if="book_data" type="text" name="book_lang" class="form-control" id="bookname" :value=book_data.language>
            <input v-else type="text" name="book_lang" class="form-control" id="bookname" >
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            <slot name='language'></slot>
        </div>
        <div class="form-group text-right" dir="rtl">
            <label for="target_relegion" class="form-label ">الديانة الموجه لها</label>
            <input v-if="book_data" type="text" name="target_relegion" class="form-control" id="bookname" :value=book_data.relegion>
            <input v-else type="text" name="target_relegion" class="form-control" id="bookname" >
            <slot name='relegion'></slot>
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group text-right" dir="rtl">
            <label for="country" class="form-label "> الدوله المتاح بها</label>
            <input v-if="book_data" type="text" name="country" class="form-control" id="bookname" :value=book_data.country>
            <input v-else type="text" name="country" class="form-control" id="bookname" >
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            <slot name='country'></slot>
        </div>
        <div class="form-group text-right" dir="rtl">
            <label for="city" class="form-label ">المدينه</label>
            <input v-if="book_data" type="text" name="city" class="form-control" id="bookname" :value=book_data.city>
            <input v-else type="text" name="city" class="form-control" id="bookname" >
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            <slot name='city'></slot>
        </div>

        <div class="form-group text-right" dir="rtl">
            <label for="is-pdf" class="form-label ">نسخه الكترونيه؟(pdf)</label>
            <input type="checkbox" name="" class="pr-4" v-model="is_pdf">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group text-right" dir="rtl" v-if="is_pdf">
            <label for="book_file" class="form-label ">ملف الكتاب (max:5MB)</label>
            <div>
                <input type="file" name="book_file" class="" id="bookname" >
            </div>
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <input v-if="book_data" type="hidden" name="_method" value="put" />
    
        <br>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary"> حفظ الكتاب</button>
        </div>
        <br>
  </form>
</template>

<script>
export default {
    props:[
        'book','page_name'
    ],
    mounted(){
        
    },
    data:function(){
        return{
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            is_pdf:false,
        }
    },
    computed:{
        book_data(){
            if(this.book!==""){
                return this.book;
            }
            return false;
        },
        form_action(){
            if(this.page_name == 'add'){
                return '/postbook';
            }

            return '/edit/'+this.book.id
        }
    }
}
</script>

<style>
.form-label{
    font-size: 30px
}
</style>