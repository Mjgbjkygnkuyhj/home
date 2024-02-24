<?php 

if(isset($_POST['m7_7z'])){
    $datauser ="root";
    $datapass = "";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $get2 = $datadbase->prepare("DELETE FROM bo");
    $get2->execute();
    $send = $datadbase->prepare("INSERT INTO bo(b) VALUE(:ip)");
    $send->bindParam("ip" , $_POST['m7_7z']);
    $send->execute();
    }

$datauser ="root";
$datapass = "";
$datadba = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
$get1 = $datadba->prepare("SELECT * FROM bo");
$get1->execute();
$get_dat = $get1->fetchAll(PDO::FETCH_ASSOC);
print_r(json_encode($get_dat));
