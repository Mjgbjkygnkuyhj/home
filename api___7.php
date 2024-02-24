<?php 
if(isset($_POST['del_37'])){
  $datauser ="root";
  $datapass = "";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("DELETE FROM mate7 WHERE mate7_5 = :ip");
  $send->bindParam("ip" , $_POST['del_37']);
  $send->execute();
}

$datauser ="root";
    $datapass = "";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $send = $datadbase->prepare("SELECT * FROM mate7");
    $send->execute();
    $one_data = $send->fetchAll(PDO::FETCH_ASSOC);
    print_r(json_encode($one_data));
?>