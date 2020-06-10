<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin:0
        }
        .content{
            font-size: 45px;
            height:100vh;
            background: #0066ff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

        }
        .text-white{
            color:#fff
        }
        .text-cente{
            text-align: center
        }
    </style>
</head>
<body>
    <div class="content"  style="" dir="rtl">
        <h3><span class="text-white" style='font-size: 45px;'>  كتاب<span style="color: #04D2C8;"> الخير</span></span></h3>
        <p style="font-size:30px;color:#fff;padding:55px">يود ان يقوم عميل بطلب كتاب منك وهذه هي بياناته</p>
        <div class="container text-center">
            <p style="font-size:30px;color:#fff">الاسم:{{$user->name}}</p>
            <p style="font-size:30px;color:#fff">البريد:{{$user->email}}</p>
            <p style="font-size:30px;color:#fff">رقم الهاتف:{{$user->phone_number}}</p>
        </div>
        
        
    </div>
</body>
</html>