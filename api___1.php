<?php 
if(isset($_POST['del_30'])){
  $datauser ="root";
  $datapass = "";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("DELETE FROM mate1 WHERE mate1_5 = :ip");
  $send->bindParam("ip" , $_POST['del_30']);
  $send->execute();
}



//mate
if(isset($_POST['g19'])){
  if($_POST['g1_12'] == " المرحله اولى" || $_POST['g1_12'] == " المرحلة اولى" || $_POST['g1_12'] == " مرحله اولى" || $_POST['g1_12'] == " مرحلة اولى"  || $_POST['g1_12'] == " المرحله الاولى" || $_POST['g1_12'] == " المرحلة الاولى" || $_POST['g1_12'] == " مرحله الاولى" || $_POST['g1_12'] == " مرحلة الاولى"){
  if($_POST['g1_11'] == 'صباحي'){
  $datauser ="root";
  $datapass = "";
  $o=" ";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("INSERT INTO mate1(mate1_1 , mate1_2 , mate1_3 , mate1_4 , mate1_5) VALUE(:i1 , :i2 , :i3 , :i4 , :i5)");
  $send->bindParam("i1" , $o);
  $send->bindParam("i2" , $_POST['g19']);
  $send->bindParam("i3" , $_POST['g1_12']);
  $send->bindParam("i4" , $_POST['g1_11']);
  $send->bindParam("i5" , $_POST['g1_10']);
  $send->execute();
  }
  if($_POST['g1_11'] == 'مسائي'){
    $datauser ="root";
  $datapass = "";
  $o=" ";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("INSERT INTO mate2(mate2_1 , mate2_2 , mate2_3 , mate2_4 , mate2_5) VALUE(:i1 , :i2 , :i3 , :i4 , :i5)");
  $send->bindParam("i1" , $o);
  $send->bindParam("i2" , $_POST['g19']);
  $send->bindParam("i3" , $_POST['g1_12']);
  $send->bindParam("i4" , $_POST['g1_11']);
  $send->bindParam("i5" , $_POST['g1_10']);
  $send->execute();
  }
  }
  if($_POST['g1_12'] == " المرحله الثانيه" || $_POST['g1_12'] == " المرحلة الثانيه" || $_POST['g1_12'] == " مرحله الثانيه" || $_POST['g1_12'] == " مرحلة الثانيه"  || $_POST['g1_12'] == " المرحله الثانية" || $_POST['g1_12'] == " المرحلة الثانية" || $_POST['g1_12'] == " مرحله ثانية" || $_POST['g1_12'] == " مرحلة ثانية"  || $_POST['g1_12'] == " المرحله ثانيه" || $_POST['g1_12'] == " المرحلة ثانيه" || $_POST['g1_12'] == " مرحله ثانيه" || $_POST['g1_12'] == " مرحلة ثانيه"  || $_POST['g1_12'] == " المرحله ثانية" || $_POST['g1_12'] == " المرحلة ثانية" || $_POST['g1_12'] == " مرحله ثانية" || $_POST['g1_12'] == " مرحلة ثانية"){

    if($_POST['g1_11'] == 'صباحي'){
    $datauser ="root";
    $datapass = "";
    $o=" ";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $send = $datadbase->prepare("INSERT INTO mate3(mate3_1 , mate3_2 , mate3_3 , mate3_4 , mate3_5) VALUE(:i1 , :i2 , :i3 , :i4 , :i5)");
    $send->bindParam("i1" , $o);
    $send->bindParam("i2" , $_POST['g19']);
    $send->bindParam("i3" , $_POST['g1_12']);
    $send->bindParam("i4" , $_POST['g1_11']);
    $send->bindParam("i5" , $_POST['g1_10']);
    $send->execute();
    }
    if($_POST['g1_11'] == 'مسائي'){
      $datauser ="root";
    $datapass = "";
    $o=" ";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $send = $datadbase->prepare("INSERT INTO mate4(mate4_1 , mate4_2 , mate4_3 , mate4_4 , mate4_5) VALUE(:i1 , :i2 , :i3 , :i4 , :i5)");
    $send->bindParam("i1" , $o);
    $send->bindParam("i2" , $_POST['g19']);
    $send->bindParam("i3" , $_POST['g1_12']);
    $send->bindParam("i4" , $_POST['g1_11']);
    $send->bindParam("i5" , $_POST['g1_10']);
    $send->execute();
    }
    }
    if($_POST['g1_12'] == " المرحله الثالثه" || $_POST['g1_12'] == " المرحلة الثالثه" || $_POST['g1_12'] == " مرحله الثالثه" || $_POST['g1_12'] == " مرحلة الثالثه"  || $_POST['g1_12'] == " المرحله الثالثة" || $_POST['g1_12'] == " المرحلة الثالثة" || $_POST['g1_12'] == " مرحله ثالثة" || $_POST['g1_12'] == " مرحلة الثالثة"  || $_POST['g1_12'] == " المرحله الثالثة" || $_POST['g1_12'] == " المرحلة الثالثة" || $_POST['g1_12'] == " مرحله الثالثة" || $_POST['g1_12'] == " مرحلة الثالثة"  || $_POST['g1_12'] == " المرحله ثالثه" || $_POST['g1_12'] == " المرحلة ثالثه" || $_POST['g1_12'] == " مرحله ثالثه" || $_POST['g1_12'] == " مرحلة ثالثه"){

      if($_POST['g1_11'] == 'صباحي'){
      $datauser ="root";
      $datapass = "";
      $o=" ";
      $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
      $send = $datadbase->prepare("INSERT INTO mate5(mate5_1 , mate5_2 , mate5_3 , mate5_4 , mate5_5) VALUE(:i1 , :i2 , :i3 , :i4 , :i5)");
      $send->bindParam("i1" , $o);
      $send->bindParam("i2" , $_POST['g19']);
      $send->bindParam("i3" , $_POST['g1_12']);
      $send->bindParam("i4" , $_POST['g1_11']);
      $send->bindParam("i5" , $_POST['g1_10']);
      $send->execute();
      }
      if($_POST['g1_11'] == 'مسائي'){
        $datauser ="root";
      $datapass = "";
      $o=" ";
      $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
      $send = $datadbase->prepare("INSERT INTO mate6(mate6_1 , mate6_2 , mate6_3 , mate6_4 , mate6_5) VALUE(:i1 , :i2 , :i3 , :i4 , :i5)");
      $send->bindParam("i1" , $o);
      $send->bindParam("i2" , $_POST['g19']);
      $send->bindParam("i3" , $_POST['g1_12']);
      $send->bindParam("i4" , $_POST['g1_11']);
      $send->bindParam("i5" , $_POST['g1_10']);
      $send->execute();
      }
      }
      if($_POST['g1_12'] == " المرحله الرابعه" || $_POST['g1_12'] == " المرحلة الرابعه" || $_POST['g1_12'] == " مرحله الرابعه" || $_POST['g1_12'] == " مرحلة الرابعه"  || $_POST['g1_12'] == " المرحله الرابعة" || $_POST['g1_12'] == " المرحلة الرابعة" || $_POST['g1_12'] == " مرحله الرابعة" || $_POST['g1_12'] == " مرحلة الرابعة"  || $_POST['g1_12'] == " المرحله رابعه" || $_POST['g1_12'] == " المرحلة رابعه" || $_POST['g1_12'] == " مرحله رابعه" || $_POST['g1_12'] == " مرحلة رابعه"  || $_POST['g1_12'] == " المرحله رابعة" || $_POST['g1_12'] == " المرحلة رابعة" || $_POST['g1_12'] == " مرحله رابعة" || $_POST['g1_12'] == " مرحلة رابعة"){
    
        if($_POST['g1_11'] == 'صباحي'){
        $datauser ="root";
        $datapass = "";
        $o=" ";
        $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
        $send = $datadbase->prepare("INSERT INTO mate7(mate7_1 , mate7_2 , mate7_3 , mate7_4 , mate7_5) VALUE(:i1 , :i2 , :i3 , :i4 , :i5)");
        $send->bindParam("i1" , $o);
        $send->bindParam("i2" , $_POST['g19']);
        $send->bindParam("i3" , $_POST['g1_12']);
        $send->bindParam("i4" , $_POST['g1_11']);
        $send->bindParam("i5" , $_POST['g1_10']);
        $send->execute();
        }
        if($_POST['g1_11'] == 'مسائي'){
          $datauser ="root";
        $datapass = "";
        $o=" ";
        $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
        $send = $datadbase->prepare("INSERT INTO mate8(mate8_1 , mate8_2 , mate8_3 , mate8_4 , mate8_5) VALUE(:i1 , :i2 , :i3 , :i4 , :i5)");
        $send->bindParam("i1" , $o);
        $send->bindParam("i2" , $_POST['g19']);
        $send->bindParam("i3" , $_POST['g1_12']);
        $send->bindParam("i4" , $_POST['g1_11']);
        $send->bindParam("i5" , $_POST['g1_10']);
        $send->execute();
        }
        }

}










//dr
if(isset($_POST['g1__1'])){
  if($_POST['g1_12'] == " المرحله اولى" || $_POST['g1_12'] == " المرحلة اولى" || $_POST['g1_12'] == " مرحله اولى" || $_POST['g1_12'] == " مرحلة اولى"  || $_POST['g1_12'] == " المرحله الاولى" || $_POST['g1_12'] == " المرحلة الاولى" || $_POST['g1_12'] == " مرحله الاولى" || $_POST['g1_12'] == " مرحلة الاولى"){
  if($_POST['g1_11'] == 'صباحي'){
  $datauser ="root";
  $datapass = "";
  $o=" ";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("INSERT INTO mate1(mate1_1 , mate1_2 , mate1_3 , mate1_4 , mate1_5) VALUE(:i1 , :i2 , :i3 , :i4 , :i5)");
  $send->bindParam("i1" , $_POST['g1__1']);
  $send->bindParam("i2" , $o);
  $send->bindParam("i3" , $_POST['g1_12']);
  $send->bindParam("i4" , $_POST['g1_11']);
  $send->bindParam("i5" , $_POST['g1_10']);
  $send->execute();
  }
  if($_POST['g1_11'] == 'مسائي'){
    $datauser ="root";
  $datapass = "";
  $o=" ";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("INSERT INTO mate2(mate2_1 , mate2_2 , mate2_3 , mate2_4 , mate2_5) VALUE(:i1 , :i2 , :i3 , :i4 , :i5)");
  $send->bindParam("i1" , $_POST['g1__1']);
  $send->bindParam("i2" , $o);
  $send->bindParam("i3" , $_POST['g1_12']);
  $send->bindParam("i4" , $_POST['g1_11']);
  $send->bindParam("i5" , $_POST['g1_10']);
  $send->execute();
  }

  }
  if($_POST['g1_12'] == " المرحله الثانيه" || $_POST['g1_12'] == " المرحلة الثانيه" || $_POST['g1_12'] == " مرحله الثانيه" || $_POST['g1_12'] == " مرحلة الثانيه"  || $_POST['g1_12'] == " المرحله الثانية" || $_POST['g1_12'] == " المرحلة الثانية" || $_POST['g1_12'] == " مرحله ثانية" || $_POST['g1_12'] == " مرحلة ثانية"  || $_POST['g1_12'] == " المرحله ثانيه" || $_POST['g1_12'] == " المرحلة ثانيه" || $_POST['g1_12'] == " مرحله ثانيه" || $_POST['g1_12'] == " مرحلة ثانيه"  || $_POST['g1_12'] == " المرحله ثانية" || $_POST['g1_12'] == " المرحلة ثانية" || $_POST['g1_12'] == " مرحله ثانية" || $_POST['g1_12'] == " مرحلة ثانية"){

    if($_POST['g1_11'] == 'صباحي'){
    $datauser ="root";
    $datapass = "";
    $o=" ";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $send = $datadbase->prepare("INSERT INTO mate1(mate1_1 , mate1_2 , mate1_3 , mate1_4 , mate1_5) VALUE(:i1 , :i2 , :i3 , :i4 , :i5)");
    $send->bindParam("i1" , $_POST['g1__1']);
    $send->bindParam("i2" , $o);
    $send->bindParam("i3" , $_POST['g1_12']);
    $send->bindParam("i4" , $_POST['g1_11']);
    $send->bindParam("i5" , $_POST['g1_10']);
    $send->execute();
    }
    if($_POST['g1_11'] == 'مسائي'){
      $datauser ="root";
    $datapass = "";
    $o=" ";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $send = $datadbase->prepare("INSERT INTO mate2(mate2_1 , mate2_2 , mate2_3 , mate2_4 , mate2_5) VALUE(:i1 , :i2 , :i3 , :i4 , :i5)");
    $send->bindParam("i1" , $_POST['g1__1']);
    $send->bindParam("i2" , $o);
    $send->bindParam("i3" , $_POST['g1_12']);
    $send->bindParam("i4" , $_POST['g1_11']);
    $send->bindParam("i5" , $_POST['g1_10']);
    $send->execute();
    }
  
    }
}





//pppp
///mate
if(isset($_POST['p1_1'])){
  if($_POST['p112'] == " المرحله اولى" || $_POST['p112'] == " المرحلة اولى" || $_POST['p112'] == " مرحله اولى" || $_POST['p112'] == " مرحلة اولى"  || $_POST['p112'] == " المرحله الاولى" || $_POST['p112'] == " المرحلة الاولى" || $_POST['p112'] == " مرحله الاولى" || $_POST['p112'] == " مرحلة الاولى"){
  if($_POST['p111'] == 'صباحي'){
  $datauser ="root";
  $datapass = "";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("UPDATE mate1 SET mate1_1 = :i1  , mate1_3 = :i2 , mate1_4 = :i3 WHERE mate1_5 = :i4");
  $send->bindParam("i1" , $_POST['p1_1']);
  
  $send->bindParam("i2" , $_POST['p112']);
  $send->bindParam("i3" , $_POST['p111']);
  $send->bindParam("i4" , $_POST['p110']);
  $send->execute();
  }
  if($_POST['p111'] == 'مسائي'){
  $datauser ="root";
  $datapass = "";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("UPDATE mate2 SET mate2_1 = :i1  , mate2_3 = :i2 , mate2_4 = :i3 WHERE mate2_5 = :i4");
  $send->bindParam("i1" , $_POST['p1_1']);
  
  $send->bindParam("i2" , $_POST['p112']);
  $send->bindParam("i3" , $_POST['p111']);
  $send->bindParam("i4" , $_POST['p110']);
  $send->execute();
  }
}
if($_POST['p112'] == " المرحله الثانيه" || $_POST['p112'] == " المرحلة الثانيه" || $_POST['p112'] == " مرحله الثانيه" || $_POST['p112'] == " مرحلة الثانيه"  || $_POST['p112'] == " المرحله الثانية" || $_POST['p112'] == " المرحلة الثانية" || $_POST['p112'] == " مرحله ثانية" || $_POST['p112'] == " مرحلة ثانية"  || $_POST['p112'] == " المرحله ثانيه" || $_POST['p112'] == " المرحلة ثانيه" || $_POST['p112'] == " مرحله ثانيه" || $_POST['p112'] == " مرحلة ثانيه"  || $_POST['p112'] == " المرحله ثانية" || $_POST['p112'] == " المرحلة ثانية" || $_POST['p112'] == " مرحله ثانية" || $_POST['p112'] == " مرحلة ثانية"){

  if($_POST['p111'] == 'صباحي'){
  $datauser ="root";
  $datapass = "";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("UPDATE mate3 SET mate3_1 = :i1  , mate3_3 = :i2 , mate3_4 = :i3 WHERE mate3_5 = :i4");
  $send->bindParam("i1" , $_POST['p1_1']);
  
  $send->bindParam("i2" , $_POST['p112']);
  $send->bindParam("i3" , $_POST['p111']);
  $send->bindParam("i4" , $_POST['p110']);
  $send->execute();
  }
  if($_POST['p111'] == 'مسائي'){
  $datauser ="root";
  $datapass = "";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("UPDATE mate4 SET mate4_1 = :i1  , mate4_3 = :i2 , mate4_4 = :i3 WHERE mate4_5 = :i4");
  $send->bindParam("i1" , $_POST['p1_1']);
  
  $send->bindParam("i2" , $_POST['p112']);
  $send->bindParam("i3" , $_POST['p111']);
  $send->bindParam("i4" , $_POST['p110']);
  $send->execute();
  }
}

if($_POST['p112'] == " المرحله الثالثه" || $_POST['p112'] == " المرحلة الثالثه" || $_POST['p112'] == " مرحله الثالثه" || $_POST['p112'] == " مرحلة الثالثه"  || $_POST['p112'] == " المرحله الثالثة" || $_POST['p112'] == " المرحلة الثالثة" || $_POST['p112'] == " مرحله ثالثة" || $_POST['p112'] == " مرحلة الثالثة"  || $_POST['p112'] == " المرحله الثالثة" || $_POST['p112'] == " المرحلة الثالثة" || $_POST['p112'] == " مرحله الثالثة" || $_POST['p112'] == " مرحلة الثالثة"  || $_POST['p112'] == " المرحله ثالثه" || $_POST['p112'] == " المرحلة ثالثه" || $_POST['p112'] == " مرحله ثالثه" || $_POST['p112'] == " مرحلة ثالثه"){

  if($_POST['p111'] == 'صباحي'){
  $datauser ="root";
  $datapass = "";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("UPDATE mate5 SET mate5_1 = :i1  , mate5_3 = :i2 , mate5_4 = :i3 WHERE mate5_5 = :i4");
  $send->bindParam("i1" , $_POST['p1_1']);
  
  $send->bindParam("i2" , $_POST['p112']);
  $send->bindParam("i3" , $_POST['p111']);
  $send->bindParam("i4" , $_POST['p110']);
  $send->execute();
  }
  if($_POST['p111'] == 'مسائي'){
  $datauser ="root";
  $datapass = "";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("UPDATE mate6 SET mate6_1 = :i1  , mate6_3 = :i2 , mate6_4 = :i3 WHERE mate6_5 = :i4");
  $send->bindParam("i1" , $_POST['p1_1']);
  
  $send->bindParam("i2" , $_POST['p112']);
  $send->bindParam("i3" , $_POST['p111']);
  $send->bindParam("i4" , $_POST['p110']);
  $send->execute();
  }
}

if($_POST['p112'] == " المرحله الرابعه" || $_POST['p112'] == " المرحلة الرابعه" || $_POST['p112'] == " مرحله الرابعه" || $_POST['p112'] == " مرحلة الرابعه"  || $_POST['p112'] == " المرحله الرابعة" || $_POST['p112'] == " المرحلة الرابعة" || $_POST['p112'] == " مرحله الرابعة" || $_POST['p112'] == " مرحلة الرابعة"  || $_POST['p112'] == " المرحله رابعه" || $_POST['p112'] == " المرحلة رابعه" || $_POST['p112'] == " مرحله رابعه" || $_POST['p112'] == " مرحلة رابعه"  || $_POST['p112'] == " المرحله رابعة" || $_POST['p112'] == " المرحلة رابعة" || $_POST['p112'] == " مرحله رابعة" || $_POST['p112'] == " مرحلة رابعة"){

  if($_POST['p111'] == 'صباحي'){
  $datauser ="root";
  $datapass = "";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("UPDATE mate7 SET mate7_1 = :i1  , mate7_3 = :i2 , mate7_4 = :i3 WHERE mate7_5 = :i4");
  $send->bindParam("i1" , $_POST['p1_1']);
  
  $send->bindParam("i2" , $_POST['p112']);
  $send->bindParam("i3" , $_POST['p111']);
  $send->bindParam("i4" , $_POST['p110']);
  $send->execute();
  }
  if($_POST['p111'] == 'مسائي'){
  $datauser ="root";
  $datapass = "";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("UPDATE mate8 SET mate8_1 = :i1  , mate8_3 = :i2 , mate8_4 = :i3 WHERE mate8_5 = :i4");
  $send->bindParam("i1" , $_POST['p1_1']);
  
  $send->bindParam("i2" , $_POST['p112']);
  $send->bindParam("i3" , $_POST['p111']);
  $send->bindParam("i4" , $_POST['p110']);
  $send->execute();
  }
}

}






//dr
if(isset($_POST['p19'])){
  if($_POST['p112'] == " المرحله اولى" || $_POST['p112'] == " المرحلة اولى" || $_POST['p112'] == " مرحله اولى" || $_POST['p112'] == " مرحلة اولى"  || $_POST['p112'] == " المرحله الاولى" || $_POST['p112'] == " المرحلة الاولى" || $_POST['p112'] == " مرحله الاولى" || $_POST['p112'] == " مرحلة الاولى"){
  if($_POST['p111'] == 'صباحي'){
  $datauser ="root";
  $datapass = "";
  $o="";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("UPDATE mate1 SET mate1_2 = :i1 , mate1_3 = :i2 , mate1_4 = :i3 WHERE mate1_5 = :i4");
  
  $send->bindParam("i1" , $_POST['p19']);
  $send->bindParam("i2" , $_POST['p112']);
  $send->bindParam("i3" , $_POST['p111']);
  $send->bindParam("i4" , $_POST['p110']);
  $send->execute();
  }
  if($_POST['p111'] == 'مسائي'){
    $datauser ="root";
    $datapass = "";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $send = $datadbase->prepare("UPDATE mate2 SET mate2_2 = :i1  , mate2_3 = :i2 , mate2_4 = :i3 WHERE mate2_5 = :i4");
    
    $send->bindParam("i1" , $_POST['p19']);
    $send->bindParam("i2" , $_POST['p112']);
    $send->bindParam("i3" , $_POST['p111']);
    $send->bindParam("i4" , $_POST['p110']);
    $send->execute();
    }

}
if($_POST['p112'] == " المرحله الثانيه" || $_POST['p112'] == " المرحلة الثانيه" || $_POST['p112'] == " مرحله الثانيه" || $_POST['p112'] == " مرحلة الثانيه"  || $_POST['p112'] == " المرحله الثانية" || $_POST['p112'] == " المرحلة الثانية" || $_POST['p112'] == " مرحله ثانية" || $_POST['p112'] == " مرحلة ثانية"  || $_POST['p112'] == " المرحله ثانيه" || $_POST['p112'] == " المرحلة ثانيه" || $_POST['p112'] == " مرحله ثانيه" || $_POST['p112'] == " مرحلة ثانيه"  || $_POST['p112'] == " المرحله ثانية" || $_POST['p112'] == " المرحلة ثانية" || $_POST['p112'] == " مرحله ثانية" || $_POST['p112'] == " مرحلة ثانية"){

  if($_POST['p111'] == 'صباحي'){
  $datauser ="root";
  $datapass = "";
  $o="";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("UPDATE mate3 SET mate3_2 = :i1 , mate3_3 = :i2 , mate3_4 = :i3 WHERE mate3_5 = :i4");
  
  $send->bindParam("i1" , $_POST['p19']);
  $send->bindParam("i2" , $_POST['p112']);
  $send->bindParam("i3" , $_POST['p111']);
  $send->bindParam("i4" , $_POST['p110']);
  $send->execute();
  }
  if($_POST['p111'] == 'مسائي'){
    $datauser ="root";
    $datapass = "";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $send = $datadbase->prepare("UPDATE mate4 SET mate4_2 = :i1  , mate4_3 = :i2 , mate4_4 = :i3 WHERE mate4_5 = :i4");
    
    $send->bindParam("i1" , $_POST['p19']);
    $send->bindParam("i2" , $_POST['p112']);
    $send->bindParam("i3" , $_POST['p111']);
    $send->bindParam("i4" , $_POST['p110']);
    $send->execute();
    }
}

if($_POST['p112'] == " المرحله الثالثه" || $_POST['p112'] == " المرحلة الثالثه" || $_POST['p112'] == " مرحله الثالثه" || $_POST['p112'] == " مرحلة الثالثه"  || $_POST['p112'] == " المرحله الثالثة" || $_POST['p112'] == " المرحلة الثالثة" || $_POST['p112'] == " مرحله ثالثة" || $_POST['p112'] == " مرحلة الثالثة"  || $_POST['p112'] == " المرحله الثالثة" || $_POST['p112'] == " المرحلة الثالثة" || $_POST['p112'] == " مرحله الثالثة" || $_POST['p112'] == " مرحلة الثالثة"  || $_POST['p112'] == " المرحله ثالثه" || $_POST['p112'] == " المرحلة ثالثه" || $_POST['p112'] == " مرحله ثالثه" || $_POST['p112'] == " مرحلة ثالثه"){

  if($_POST['p111'] == 'صباحي'){
  $datauser ="root";
  $datapass = "";
  $o="";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("UPDATE mate5 SET mate5_2 = :i1 , mate5_3 = :i2 , mate5_4 = :i3 WHERE mate5_5 = :i4");
  
  $send->bindParam("i1" , $_POST['p19']);
  $send->bindParam("i2" , $_POST['p112']);
  $send->bindParam("i3" , $_POST['p111']);
  $send->bindParam("i4" , $_POST['p110']);
  $send->execute();
  }
  if($_POST['p111'] == 'مسائي'){
    $datauser ="root";
    $datapass = "";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $send = $datadbase->prepare("UPDATE mate6 SET mate6_2 = :i1  , mate6_3 = :i2 , mate6_4 = :i3 WHERE mate6_5 = :i4");
    
    $send->bindParam("i1" , $_POST['p19']);
    $send->bindParam("i2" , $_POST['p112']);
    $send->bindParam("i3" , $_POST['p111']);
    $send->bindParam("i4" , $_POST['p110']);
    $send->execute();
    }
}    


if($_POST['p112'] == " المرحله الرابعه" || $_POST['p112'] == " المرحلة الرابعه" || $_POST['p112'] == " مرحله الرابعه" || $_POST['p112'] == " مرحلة الرابعه"  || $_POST['p112'] == " المرحله الرابعة" || $_POST['p112'] == " المرحلة الرابعة" || $_POST['p112'] == " مرحله الرابعة" || $_POST['p112'] == " مرحلة الرابعة"  || $_POST['p112'] == " المرحله رابعه" || $_POST['p112'] == " المرحلة رابعه" || $_POST['p112'] == " مرحله رابعه" || $_POST['p112'] == " مرحلة رابعه"  || $_POST['p112'] == " المرحله رابعة" || $_POST['p112'] == " المرحلة رابعة" || $_POST['p112'] == " مرحله رابعة" || $_POST['p112'] == " مرحلة رابعة"){

  if($_POST['p111'] == 'صباحي'){
  $datauser ="root";
  $datapass = "";
  $o="";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("UPDATE mate7 SET mate7_2 = :i1 , mate7_3 = :i2 , mate7_4 = :i3 WHERE mate7_5 = :i4");
  
  $send->bindParam("i1" , $_POST['p19']);
  $send->bindParam("i2" , $_POST['p112']);
  $send->bindParam("i3" , $_POST['p111']);
  $send->bindParam("i4" , $_POST['p110']);
  $send->execute();
  }
  if($_POST['p111'] == 'مسائي'){
    $datauser ="root";
    $datapass = "";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $send = $datadbase->prepare("UPDATE mate8 SET mate8_2 = :i1  , mate8_3 = :i2 , mate8_4 = :i3 WHERE mate8_5 = :i4");
    
    $send->bindParam("i1" , $_POST['p19']);
    $send->bindParam("i2" , $_POST['p112']);
    $send->bindParam("i3" , $_POST['p111']);
    $send->bindParam("i4" , $_POST['p110']);
    $send->execute();
    }
}    
}


//// set
$datauser ="root";
    $datapass = "";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $send = $datadbase->prepare("SELECT * FROM mate1");
    $send->execute();
    $one_data = $send->fetchAll(PDO::FETCH_ASSOC);
    print_r(json_encode($one_data));
?>