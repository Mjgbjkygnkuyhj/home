<?php 
if(isset($_POST['del_36'])){
  $datauser ="root";
  $datapass = "";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("DELETE FROM mate6 WHERE mate6_5 = :ip");
  $send->bindParam("ip" , $_POST['del_36']);
  $send->execute();
}

$datauser ="root";
    $datapass = "";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $send = $datadbase->prepare("SELECT * FROM mate6");
    $send->execute();
    $one_data = $send->fetchAll(PDO::FETCH_ASSOC);
    print_r(json_encode($one_data));
?>