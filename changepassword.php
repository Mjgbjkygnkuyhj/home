<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cssfile (2).css">
    <script src="js/changePass.js" defer></script>
    <title>change password</title>
    <style>
    .btn-pass1{
    display: flex;
    flex-direction: row-reverse;
    justify-content: space-between;
    width: 100%;
    justify-self: center;
    margin-block-start: calc(38vw/var(--divide-point));
    
}
.btn-pass1 input{
    border: none;
    border-radius: .4vw;
    outline: none;
    background-color: var(--gray-main);
    font-size:  calc(39vw/var(--divide-point));
    width: calc(580vw/var(--divide-point));
    height: calc(95vw/var(--divide-point));
    color: #fff;
    cursor: pointer;

}
.btn-pass1 .i5{
    background-color: var(--act-btnColor);  
}
#io{
    margin-top: 20px;
    border: none;
    border-radius: .4vw;
    outline: none;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size:  calc(40vw/var(--divide-point));
    width: calc(580vw/var(--divide-point));
    height: calc(95vw/var(--divide-point));
    color: black;
    cursor: pointer;

}
    </style>
</head>
<body dir="rtl">
    <div class="con2">
        <div class="head">
            <p>قسم هندسة تكنولوجيا الأمن السبراني</p>
            <div class="img">
                <img src="img/photo_2023-10-19_08-59-37-removebg-preview 1.svg" alt="">
            </div>
        </div>
    </div>
    <div class="con2"> 
        <!-- حول
        con
    الى 
    form 
اذ تريد-->
<div class="form">
    <div class="old-pass">
        <label for="o-p">كلمة المرور الجديدة</label>
        <input  type="text" name="o-p">
    </div>
    <div class="new-pass">
        <label for="n-p">ادخل رقم موبايل</label>
        <input   type="password"  name="n-p">
    </div>
    <div class="chick-pass">
        <label for="c-p">ادخل كلمة التي تم ارسال الى رقم موبايل </label>
        <input  require type="password" name="c-p">
    </div>
</div>
<div class="btn-pass1">
<a href="../../new/home/index"><input type="button" value="رجوع"></a>
    <input  type="button" class="i5" value="حفظ التغيرات">
</div>
    </div>
    <div class="alert visiple">
        <svg  viewBox="0 0 448 357" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="448" height="357" rx="12" fill="white"/>
            </svg>
            <p>يجب ملء جميع الحقول</p>
    </div>
</body>
</html>

<?php
$to = "alial778810@gmail.com";
$from ="alial778810@gmail.com";
$message = "mohammed";
$headers = "From: $from\n";
mail($to , '' , $message , $headers);