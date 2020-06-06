<template>
  <form action="/postbook" enctype="multipart/form-data" method="POST" >
      <input type="hidden" name="_token" :value="csrf">
      <div class="form-group text-right" dir="rtl">
            <label for="book_name" class="form-label ">اسم الكتاب</label>
            <input type="text" name="book_name" class="form-control" id="bookname" aria-describedby="emailHelp">
        </div>
        <div class="form-group text-right" dir="rtl">
            <label for="book_photo" class="form-label ">صورة الكتاب</label>
            <div>
                <input type="file" name="book_photo" class="" id="bookname" aria-describedby="emailHelp">
            </div>
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group text-right" dir="rtl">
            <label for="book_lang" class="form-label ">لغه الكتاب</label>
            <input type="text" name="book_lang" class="form-control" id="bookname" aria-describedby="emailHelp">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group text-right" dir="rtl">
            <label for="target_relegion" class="form-label ">الديانة الموجه لها</label>
            <input type="text" name="target_relegion" class="form-control" id="bookname" aria-describedby="emailHelp">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group text-right" dir="rtl">
            <label for="country" class="form-label "> الدوله المتاح بها</label>
            <input type="text" name="country" class="form-control" id="bookname" aria-describedby="emailHelp">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group text-right" dir="rtl">
            <label for="city" class="form-label ">المدينه</label>
            <input type="text" name="city" class="form-control" id="bookname" aria-describedby="emailHelp">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>

        <div class="form-group text-right" dir="rtl">
            <label for="is-pdf" class="form-label ">نسخه الكترونيه؟(pdf)</label>
            <input type="checkbox" name="" class="pr-4" v-model="is_pdf">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group text-right" dir="rtl" v-if="is_pdf">
            <label for="book_file" class="form-label ">ملف الكتاب (max:5MB)</label>
            <div>
                <input type="file" name="book_file" class="" id="bookname" aria-describedby="emailHelp">
            </div>
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>


        <br>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">حفظ</button>
        </div>
        <br>
  </form>
</template>

<script>
export default {

    data:function(){
        return{
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            is_pdf:false,
        }
    }
}
</script>

<style>
.form-label{
    font-size: 30px
}
</style>