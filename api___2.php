<?php 
if(isset($_POST['del_32'])){
  $datauser ="root";
  $datapass = "";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("DELETE FROM mate2 WHERE mate2_5 = :ip");
  $send->bindParam("ip" , $_POST['del_32']);
  $send->execute();
}

$datauser ="root";
    $datapass = "";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $send = $datadbase->prepare("SELECT * FROM mate2");
    $send->execute();
    $one_data = $send->fetchAll(PDO::FETCH_ASSOC);
    print_r(json_encode($one_data));
?>