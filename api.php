<?php 
   
  $datauser ="root";
  $datapass = "";
  $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
  $send = $datadbase->prepare("SELECT * FROM phase");
  $send->execute();
  $one_data = $send->fetchAll(PDO::FETCH_ASSOC);
  print_r(json_encode($one_data));
  ?>