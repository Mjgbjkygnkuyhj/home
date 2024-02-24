<?php
if(isset($_POST['ph10'])){
    $passuser  = $_POST['ph10'];
    $passfilter   = strip_tags($passuser);
    $passfilter_1 = filter_var($passfilter , FILTER_SANITIZE_EMAIL);
    $passopen = openssl_encrypt($passfilter_1 , "AES-256-CBC" , "@@$$123@@$$123moh__moh__9090" , 0 , "1234567812345678");
    $passset  = sha1($passopen);
    $datauser ="root";
    $datapass = "";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $get2 = $datadbase->prepare("DELETE FROM ff2");
    $get2->execute();
    $send = $datadbase->prepare("INSERT INTO ff2(ff3) VALUE(:ip)");
    $send->bindParam("ip" , $passset);
    $send->execute();
    }

$datauser ="root";
$datapass = "";
$datadba = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
$snd = $datadba->prepare("SELECT * FROM pass");
$snd->execute();
$dat = $snd->fetchAll(PDO::FETCH_ASSOC);
print_r(json_encode($dat));
?>