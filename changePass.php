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
        #mk{
    visibility: hidden;
    display: none;
}
.i9{
    visibility: hidden;
    display: none;
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
        <label for="o-p">كلمة المرور الحاليه</label>
        <input class="qq"  type="text" name="o-p">
    </div>
    <div class="new-pass">
        <label for="n-p">كلمة المرور الجديدة</label>
        <input  class="qq1"   type="password"  name="n-p">
    </div>
    <div class="chick-pass">
        <label for="c-p">تأكيد كلمة المرور الجديدة</label>
        <input  class="qq2"   type="password" name="c-p">
    </div>
</div>
<div class="btn-pass">
    <a href="index"><input type="button" value="رجوع"></a>
    <input  type="submit" value="حفظ التغيرات">
</div>
    </div>
    <div class="alert visiple">
        <svg  viewBox="0 0 448 357" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="448" height="357" rx="12" fill="white"/>
            </svg>
            <p>يجب ملء جميع الحقول</p>
    </div>
    <div id="bod" class="mk"></div>
    <div id="bod1" class="mk"></div>
    <div id="i9"></div>
</body>

<script>
    const passList =document.querySelectorAll(".form > div input");
const savePass =document.querySelector(".btn-pass input[type=submit]");
const cAlert =document.querySelector(".alert");
// بدل هذا جيب كلمه سر مالتك
let pass
let pass1
fetch('../../new/home/api__1')
   .then((response)=>response.json())
   .then((json)=>
   { 
    json.forEach(D1=>{
        pass = D1.ip;
    });
});



passList.forEach(ip =>{
        ip.addEventListener("input",()=>{
                let cIndex=0;
                for (let i = 0; i < passList.length; i++) {                        
                        if (passList[i].value !== "") {
                                cIndex++;
                                // console.log(cIndex)
                        }
                }
                savePass.style.visibility =(cIndex === 3)? "unset" : "hidden";
        })
})

savePass.addEventListener("click", ()=>{
        let wp="كلمة المرور الحاليه  خاطأه",
        um="تأكيد كلمة المرور لا تتطابق مع كلمه المرور الجديده";
        let oop = document.getElementById("bod");
        let out = '<form id="oop" method="post"><input id="mk" class="mk" type="text" name="ph1" value='+passList[0].value+' /></form>'
        oop.innerHTML = out;
        let oop__1 = document.getElementById("oop");
        let oop__2 = new FormData(oop__1);
        fetch("../../new/home/apipass" , {
            method : "post" ,
            body : oop__2
        });
        setInterval(()=>{
    fetch('../../new/home/apipass')
    .then((response)=>response.json())
    .then((json)=>
    {
        json.forEach(j=>{
        window.localStorage.setItem("pass" , j.ff1);
            })
    }); 
} , 200);
        function mu(){
        if(window.localStorage.getItem("pass") !== pass) {
                alertCard(wp)
                return;
        }
        else if(passList[1].value !== passList[2].value){
                alertCard(um)
                return;
        }
        else{
        let oop = document.getElementById("bod1");
        let out = '<form id="oo" method="post"><input id="mk" class="mk" type="text" name="ph2" value='+passList[1].value+' /></form>'
        oop.innerHTML = out;
        let oop__1 = document.getElementById("oo");
        let oop__2 = new FormData(oop__1);
        fetch("../../new/home/apipass" , {
            method : "post" ,
            body : oop__2
        });
        let qq = document.querySelector(".qq");
        qq.value="";
        let qq1 = document.querySelector(".qq1");
        qq1.value="";
        let qq2 = document.querySelector(".qq2");
        qq2.value="";
        }
    }
    setTimeout(mu , 270);
        // localStorage.setItem("pass",passList[2].value) // اذ متريده امسحه 
})
cAlert.addEventListener("click",removeCard)
function removeCard(e){
        e.currentTarget.classList.add("visiple");
    }
    function alertCard(text){
        cAlert.querySelector("p").textContent = text;
        cAlert.classList.remove("visiple"); 
    }
</script>

</html>


<?php 
    if(isset($_POST['ph'])){
            echo "mkmkmkm";
    }
        ?>