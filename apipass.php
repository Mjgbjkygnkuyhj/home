<?php
if(isset($_POST['ph1'])){
$passuser  = $_POST['ph1'];
$passfilter   = strip_tags($passuser);
$passfilter_1 = filter_var($passfilter , FILTER_SANITIZE_EMAIL);
$passopen = openssl_encrypt($passfilter_1 , "AES-256-CBC" , "@@$$123@@$$123moh__moh__9090" , 0 , "1234567812345678");
$passset  = sha1($passopen);
$datauser ="root";
$datapass = "";
$datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
$get2 = $datadbase->prepare("DELETE FROM ff");
$get2->execute();
$send = $datadbase->prepare("INSERT INTO ff(ff1) VALUE(:ip)");
$send->bindParam("ip" , $passset);
$send->execute();
}
if(isset($_POST['ph2'])){
    $passuser  = $_POST['ph2'];
    $passfilter   = strip_tags($passuser);
    $passfilter_1 = filter_var($passfilter , FILTER_SANITIZE_EMAIL);
    $passopen = openssl_encrypt($passfilter_1 , "AES-256-CBC" , "@@$$123@@$$123moh__moh__9090" , 0 , "1234567812345678");
    $passset  = sha1($passopen);
    $datauser ="root";
    $datapass = "";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $get2 = $datadbase->prepare("DELETE FROM pass");
    $get2->execute();
    $send = $datadbase->prepare("INSERT INTO pass(ip) VALUE(:ip)");
    $send->bindParam("ip" , $passset);
    $send->execute();
    }
$datauser ="root";
$datapass = "";
$datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
$send = $datadbase->prepare("SELECT * FROM ff");
$send->execute();
$one_data = $send->fetchAll(PDO::FETCH_ASSOC);
print_r(json_encode($one_data));