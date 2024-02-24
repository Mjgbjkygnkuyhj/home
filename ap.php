<?php
$datauser ="root";
$datapass = "";
$datadba = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
$get1 = $datadba->prepare("SELECT * FROM matter");
$get1->execute();
$get_dat = $get1->fetchAll(PDO::FETCH_ASSOC);
print_r(json_encode($get_dat));
