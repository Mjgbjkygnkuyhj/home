<?php
if(isset($_POST['del_95'])){
    $datauser ="root";
    $datapass = "";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $send = $datadbase->prepare("DELETE FROM matter7 WHERE matter7_4 = :ip");
    $send->bindParam("ip" , $_POST['del_95']);
    $send->execute();
  }
$datauser ="root";
    $datapass = "";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $send = $datadbase->prepare("SELECT * FROM matter7");
    $send->execute();
    $one_data = $send->fetchAll(PDO::FETCH_ASSOC);
    print_r(json_encode($one_data));
?>