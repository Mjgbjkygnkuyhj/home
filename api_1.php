<?php
if(isset($_POST['mate'])){
    $datauser ="root";
    $datapass = "";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $get2 = $datadbase->prepare("DELETE FROM  st_1");
    $get2->execute();
    $setdata = $datadbase->prepare("INSERT INTO st_1(ip,ph_1) VALUE(:ip,:ph_1)");
    $setdata->bindParam("ip" ,$_POST['ph']);
    $setdata->bindParam("ph_1" , $_POST['mate']);
    $setdata->execute();
}
$datauser ="root";
$datapass = "";
$datadba = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
$get1 = $datadba->prepare("SELECT * FROM st_1");
$get1->execute();
$get_dat = $get1->fetchAll(PDO::FETCH_ASSOC);
print_r(json_encode($get_dat));