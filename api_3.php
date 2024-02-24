<?php
if(isset($_POST['phase'])){
    $datauser ="root";
    $datapass = "";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $setdata = $datadbase->prepare("INSERT INTO offer(pha_1,mzm,zmz,zmz_mk,h_1,time,act_1) VALUE(:i1,:i2,:i3,:i4,:i5,:i6,:i7)");
    $setdata->bindParam("i1" ,$_POST['phase']);
    $setdata->bindParam("i2" , $_POST['mzm']);
    $setdata->bindParam("i3" , $_POST['zmz']);
    $setdata->bindParam("i4" , $_POST['zmz_mk']);
    $setdata->bindParam("i5" , $_POST['hall']);
    $setdata->bindParam("i6" , $_POST['time']);
    $setdata->bindParam("i7" , $_POST['active']);
    $setdata->execute();
}
if(isset($_POST['dele_1'])){
        if($_POST['act__1'] == 'صباحي'){
        $datauser ="root";
        $datapass = "";
        $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
        $setdata_1 = $datadbase->prepare("INSERT INTO offer_1(pha_2,mzm_1,zmz_1,zmz_mk_1,h_2,time_1,act_2 ,time_3 , time_4) VALUE(:i1,:i2,:i3,:i4,:i5,:i6,:i7,:i8,:i9)");
        $setdata_1->bindParam("i1" ,$_POST['phase__1']);
        $setdata_1->bindParam("i2" , $_POST['mzm__1']);
        $setdata_1->bindParam("i3" , $_POST['zmz__1']);
        $setdata_1->bindParam("i4" , $_POST['zmz_mk_1']);
        $setdata_1->bindParam("i5" , $_POST['dele_1']);
        $setdata_1->bindParam("i6" , $_POST['time__1']);
        $setdata_1->bindParam("i7" , $_POST['act__1']);
        $setdata_1->bindParam("i8" , $_POST['time__2']);
        $setdata_1->bindParam("i9" , $_POST['time__3']);
        $setdata_1->execute();
        $setdata = $datadbase->prepare("DELETE FROM  offer WHERE  h_1 = :i1");
        $setdata->bindParam("i1" ,$_POST['dele_1']);
        $setdata->execute();
        }
        if($_POST['act__1'] == 'مسائي'){
        $datauser ="root";
        $datapass = "";
        $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
        $setdata_2 = $datadbase->prepare("INSERT INTO offer_2(pha_3,mzm_2,zmz_2,zmz_mk_2,h_3,time_2,act_3 ,time_5 , time_6) VALUE(:i11,:i21,:i31,:i41,:i51,:i61,:i71,:i81,:i91)");
        $setdata_2->bindParam("i11" ,$_POST['phase__1']);
        $setdata_2->bindParam("i21" , $_POST['mzm__1']);
        $setdata_2->bindParam("i31" , $_POST['zmz__1']);
        $setdata_2->bindParam("i41" , $_POST['zmz_mk_1']);
        $setdata_2->bindParam("i51" , $_POST['dele_1']);
        $setdata_2->bindParam("i61" , $_POST['time__1']);
        $setdata_2->bindParam("i71" , $_POST['act__1']);
        $setdata_2->bindParam("i81" , $_POST['time__2']);
        $setdata_2->bindParam("i91" , $_POST['time__3']);
        $setdata_2->execute();
        $set = $datadbase->prepare("DELETE FROM  offer WHERE  h_1 = :i10");
        $set->bindParam("i10" ,$_POST['dele_1']);
        $set->execute();
        }
}
$datauser ="root";
$datapass = "";
$datadba = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
$get1 = $datadba->prepare("SELECT * FROM offer");
$get1->execute();
$get_dat = $get1->fetchAll(PDO::FETCH_ASSOC);
print_r(json_encode($get_dat));