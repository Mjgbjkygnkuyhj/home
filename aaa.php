if($_POST['g_11'] == 'مسائي'){
    $datauser ="root";
    $datapass = "";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $send = $datadbase->prepare("INSERT INTO matter2(matter2_1 , matter2_2 , matter2_3 , matter2_4) VALUE(:i1 , :i2 , :i3 , :i4)");
    $send->bindParam("i1" , $_POST['g_9']);
    $send->bindParam("i2" , $_POST['g_12']);
    $send->bindParam("i3" , $_POST['g_11']);
    $send->bindParam("i4" , $_POST['g_10']);
    $send->execute();
    }
  }
  if($_POST['g_12'] == " المرحله الثانيه" || $_POST['g_12'] == " المرحلة الثانيه" || $_POST['g_12'] == " مرحله الثانيه" || $_POST['g_12'] == " مرحلة الثانيه"  || $_POST['g_12'] == " المرحله الثانية" || $_POST['g_12'] == " المرحلة الثانية" || $_POST['g_12'] == " مرحله ثانية" || $_POST['g_12'] == " مرحلة ثانية"  || $_POST['g_12'] == " المرحله ثانيه" || $_POST['g_12'] == " المرحلة ثانيه" || $_POST['g_12'] == " مرحله ثانيه" || $_POST['g_12'] == " مرحلة ثانيه"  || $_POST['g_12'] == " المرحله ثانية" || $_POST['g_12'] == " المرحلة ثانية" || $_POST['g_12'] == " مرحله ثانية" || $_POST['g_12'] == " مرحلة ثانية"){
    if($_POST['g_11'] == 'صباحي'){
      $datauser ="root";
      $datapass = "";
      $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
      $send = $datadbase->prepare("INSERT INTO matter3(matter3_1 , matter3_2 , matter3_3 , matter3_4) VALUE(:i1 , :i2 , :i3 , :i4)");
      $send->bindParam("i1" , $_POST['g_9']);
      $send->bindParam("i2" , $_POST['g_12']);
      $send->bindParam("i3" , $_POST['g_11']);
      $send->bindParam("i4" , $_POST['g_10']);
      $send->execute();
      }
      if($_POST['g_11'] == 'مسائي'){
        $datauser ="root";
        $datapass = "";
        $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
        $send = $datadbase->prepare("INSERT INTO matter4(matter4_1 , matter4_2 , matter4_3 , matter4_4) VALUE(:i1 , :i2 , :i3 , :i4)");
        $send->bindParam("i1" , $_POST['g_9']);
        $send->bindParam("i2" , $_POST['g_12']);
        $send->bindParam("i3" , $_POST['g_11']);
        $send->bindParam("i4" , $_POST['g_10']);
        $send->execute();
        }
  }
  if($_POST['g_12'] == " المرحله الثالثه" || $_POST['g_12'] == " المرحلة الثالثه" || $_POST['g_12'] == " مرحله الثالثه" || $_POST['g_12'] == " مرحلة الثالثه"  || $_POST['g_12'] == " المرحله الثالثة" || $_POST['g_12'] == " المرحلة الثالثة" || $_POST['g_12'] == " مرحله ثالثة" || $_POST['g_12'] == " مرحلة الثالثة"  || $_POST['g_12'] == " المرحله الثالثة" || $_POST['g_12'] == " المرحلة الثالثة" || $_POST['g_12'] == " مرحله الثالثة" || $_POST['g_12'] == " مرحلة الثالثة"  || $_POST['g_12'] == " المرحله ثالثه" || $_POST['g_12'] == " المرحلة ثالثه" || $_POST['g_12'] == " مرحله ثالثه" || $_POST['g_12'] == " مرحلة ثالثه"){
    if($_POST['g_11'] == 'صباحي'){
      $datauser ="root";
      $datapass = "";
      $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
      $send = $datadbase->prepare("INSERT INTO matter5(matter5_1 , matter5_2 , matter5_3 , matter5_4) VALUE(:i1 , :i2 , :i3 , :i4)");
      $send->bindParam("i1" , $_POST['g_9']);
      $send->bindParam("i2" , $_POST['g_12']);
      $send->bindParam("i3" , $_POST['g_11']);
      $send->bindParam("i4" , $_POST['g_10']);
      $send->execute();
      }
      if($_POST['g_11'] == 'مسائي'){
        $datauser ="root";
        $datapass = "";
        $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
        $send = $datadbase->prepare("INSERT INTO matter6(matter6_1 , matter6_2 , matter6_3 , matter6_4) VALUE(:i1 , :i2 , :i3 , :i4)");
        $send->bindParam("i1" , $_POST['g_9']);
        $send->bindParam("i2" , $_POST['g_12']);
        $send->bindParam("i3" , $_POST['g_11']);
        $send->bindParam("i4" , $_POST['g_10']);
        $send->execute();
        }
  }
  if($_POST['g_12'] == " المرحله الرابعه" || $_POST['g_12'] == " المرحلة الرابعه" || $_POST['g_12'] == " مرحله الرابعه" || $_POST['g_12'] == " مرحلة الرابعه"  || $_POST['g_12'] == " المرحله الرابعة" || $_POST['g_12'] == " المرحلة الرابعة" || $_POST['g_12'] == " مرحله الرابعة" || $_POST['g_12'] == " مرحلة الرابعة"  || $_POST['g_12'] == " المرحله رابعه" || $_POST['g_12'] == " المرحلة رابعه" || $_POST['g_12'] == " مرحله رابعه" || $_POST['g_12'] == " مرحلة رابعه"  || $_POST['g_12'] == " المرحله رابعة" || $_POST['g_12'] == " المرحلة رابعة" || $_POST['g_12'] == " مرحله رابعة" || $_POST['g_12'] == " مرحلة رابعة"){
    if($_POST['g_11'] == 'صباحي'){
      $datauser ="root";
      $datapass = "";
      $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
      $send = $datadbase->prepare("INSERT INTO matter7(matter7_1 , matter7_2 , matter7_3 , matter7_4) VALUE(:i1 , :i2 , :i3 , :i4)");
      $send->bindParam("i1" , $_POST['g_9']);
      $send->bindParam("i2" , $_POST['g_12']);
      $send->bindParam("i3" , $_POST['g_11']);
      $send->bindParam("i4" , $_POST['g_10']);
      $send->execute();
      }
      if($_POST['g_11'] == 'مسائي'){
        $datauser ="root";
        $datapass = "";
        $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
        $send = $datadbase->prepare("INSERT INTO matter8(matter8_1 , matter8_2 , matter8_3 , matter8_4) VALUE(:i1 , :i2 , :i3 , :i4)");
        $send->bindParam("i1" , $_POST['g_9']);
        $send->bindParam("i2" , $_POST['g_12']);
        $send->bindParam("i3" , $_POST['g_11']);
        $send->bindParam("i4" , $_POST['g_10']);
        $send->execute();
        }
  }

}

// dr
if(isset($_POST['g19'])){
  if($_POST['g1_12'] == " المرحله اولى" || $_POST['g1_12'] == " المرحلة اولى" || $_POST['g1_12'] == " مرحله اولى" || $_POST['g1_12'] == " مرحلة اولى"  || $_POST['g1_12'] == " المرحله الاولى" || $_POST['g1_12'] == " المرحلة الاولى" || $_POST['g1_12'] == " مرحله الاولى" || $_POST['g1_12'] == " مرحلة الاولى"){
  if($_POST['g1_11'] == 'صباحي'){
  $datauser ="root";
  $datapass = "";
  $o=" ";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("INSERT INTO mate1(mate1_1 , mate1_2 , mate1_3 , mate1_4 , mate1_5) VALUE(:i1 , :i2 , :i3 , :i4 , :i5)");
  $send->bindParam("i1" , $o);
  $send->bindParam("i2" , $_POST['g12']);
  $send->bindParam("i3" , $_POST['g1_12']);
  $send->bindParam("i4" , $_POST['g1_11']);
  $send->bindParam("i5" , $_POST['g1_10']);
  $send->execute();
  }
  if($_POST['g_11'] == 'مسائي'){
    $datauser ="root";
    $datapass = "";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $send = $datadbase->prepare("INSERT INTO matter2(matter2_1 , matter2_2 , matter2_3 , matter2_4) VALUE(:i1 , :i2 , :i3 , :i4)");
    $send->bindParam("i1" , $_POST['g_9']);
    $send->bindParam("i2" , $_POST['g_12']);
    $send->bindParam("i3" , $_POST['g_11']);
    $send->bindParam("i4" , $_POST['g_10']);
    $send->execute();
    }
  }
  if($_POST['g_12'] == " المرحله الثانيه" || $_POST['g_12'] == " المرحلة الثانيه" || $_POST['g_12'] == " مرحله الثانيه" || $_POST['g_12'] == " مرحلة الثانيه"  || $_POST['g_12'] == " المرحله الثانية" || $_POST['g_12'] == " المرحلة الثانية" || $_POST['g_12'] == " مرحله ثانية" || $_POST['g_12'] == " مرحلة ثانية"  || $_POST['g_12'] == " المرحله ثانيه" || $_POST['g_12'] == " المرحلة ثانيه" || $_POST['g_12'] == " مرحله ثانيه" || $_POST['g_12'] == " مرحلة ثانيه"  || $_POST['g_12'] == " المرحله ثانية" || $_POST['g_12'] == " المرحلة ثانية" || $_POST['g_12'] == " مرحله ثانية" || $_POST['g_12'] == " مرحلة ثانية"){
    if($_POST['g_11'] == 'صباحي'){
      $datauser ="root";
      $datapass = "";
      $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
      $send = $datadbase->prepare("INSERT INTO matter3(matter3_1 , matter3_2 , matter3_3 , matter3_4) VALUE(:i1 , :i2 , :i3 , :i4)");
      $send->bindParam("i1" , $_POST['g_9']);
      $send->bindParam("i2" , $_POST['g_12']);
      $send->bindParam("i3" , $_POST['g_11']);
      $send->bindParam("i4" , $_POST['g_10']);
      $send->execute();
      }
      if($_POST['g_11'] == 'مسائي'){
        $datauser ="root";
        $datapass = "";
        $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
        $send = $datadbase->prepare("INSERT INTO matter4(matter4_1 , matter4_2 , matter4_3 , matter4_4) VALUE(:i1 , :i2 , :i3 , :i4)");
        $send->bindParam("i1" , $_POST['g_9']);
        $send->bindParam("i2" , $_POST['g_12']);
        $send->bindParam("i3" , $_POST['g_11']);
        $send->bindParam("i4" , $_POST['g_10']);
        $send->execute();
        }
  }
  if($_POST['g_12'] == " المرحله الثالثه" || $_POST['g_12'] == " المرحلة الثالثه" || $_POST['g_12'] == " مرحله الثالثه" || $_POST['g_12'] == " مرحلة الثالثه"  || $_POST['g_12'] == " المرحله الثالثة" || $_POST['g_12'] == " المرحلة الثالثة" || $_POST['g_12'] == " مرحله ثالثة" || $_POST['g_12'] == " مرحلة الثالثة"  || $_POST['g_12'] == " المرحله الثالثة" || $_POST['g_12'] == " المرحلة الثالثة" || $_POST['g_12'] == " مرحله الثالثة" || $_POST['g_12'] == " مرحلة الثالثة"  || $_POST['g_12'] == " المرحله ثالثه" || $_POST['g_12'] == " المرحلة ثالثه" || $_POST['g_12'] == " مرحله ثالثه" || $_POST['g_12'] == " مرحلة ثالثه"){
    if($_POST['g_11'] == 'صباحي'){
      $datauser ="root";
      $datapass = "";
      $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
      $send = $datadbase->prepare("INSERT INTO matter5(matter5_1 , matter5_2 , matter5_3 , matter5_4) VALUE(:i1 , :i2 , :i3 , :i4)");
      $send->bindParam("i1" , $_POST['g_9']);
      $send->bindParam("i2" , $_POST['g_12']);
      $send->bindParam("i3" , $_POST['g_11']);
      $send->bindParam("i4" , $_POST['g_10']);
      $send->execute();
      }
      if($_POST['g_11'] == 'مسائي'){
        $datauser ="root";
        $datapass = "";
        $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
        $send = $datadbase->prepare("INSERT INTO matter6(matter6_1 , matter6_2 , matter6_3 , matter6_4) VALUE(:i1 , :i2 , :i3 , :i4)");
        $send->bindParam("i1" , $_POST['g_9']);
        $send->bindParam("i2" , $_POST['g_12']);
        $send->bindParam("i3" , $_POST['g_11']);
        $send->bindParam("i4" , $_POST['g_10']);
        $send->execute();
        }
  }
  if($_POST['g_12'] == " المرحله الرابعه" || $_POST['g_12'] == " المرحلة الرابعه" || $_POST['g_12'] == " مرحله الرابعه" || $_POST['g_12'] == " مرحلة الرابعه"  || $_POST['g_12'] == " المرحله الرابعة" || $_POST['g_12'] == " المرحلة الرابعة" || $_POST['g_12'] == " مرحله الرابعة" || $_POST['g_12'] == " مرحلة الرابعة"  || $_POST['g_12'] == " المرحله رابعه" || $_POST['g_12'] == " المرحلة رابعه" || $_POST['g_12'] == " مرحله رابعه" || $_POST['g_12'] == " مرحلة رابعه"  || $_POST['g_12'] == " المرحله رابعة" || $_POST['g_12'] == " المرحلة رابعة" || $_POST['g_12'] == " مرحله رابعة" || $_POST['g_12'] == " مرحلة رابعة"){
    if($_POST['g_11'] == 'صباحي'){
      $datauser ="root";
      $datapass = "";
      $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
      $send = $datadbase->prepare("INSERT INTO matter7(matter7_1 , matter7_2 , matter7_3 , matter7_4) VALUE(:i1 , :i2 , :i3 , :i4)");
      $send->bindParam("i1" , $_POST['g_9']);
      $send->bindParam("i2" , $_POST['g_12']);
      $send->bindParam("i3" , $_POST['g_11']);
      $send->bindParam("i4" , $_POST['g_10']);
      $send->execute();
      }
      if($_POST['g_11'] == 'مسائي'){
        $datauser ="root";
        $datapass = "";
        $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
        $send = $datadbase->prepare("INSERT INTO matter8(matter8_1 , matter8_2 , matter8_3 , matter8_4) VALUE(:i1 , :i2 , :i3 , :i4)");
        $send->bindParam("i1" , $_POST['g_9']);
        $send->bindParam("i2" , $_POST['g_12']);
        $send->bindParam("i3" , $_POST['g_11']);
        $send->bindParam("i4" , $_POST['g_10']);
        $send->execute();
        }
  }

}