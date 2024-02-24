<?php
    $datauser ="root";
    $datapass = "";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $send1 = $datadbase->prepare("SELECT * FROM matter3,matter6,matter7,matter8");
    $send1->execute();
    $one_data1 = $send1->fetchAll(PDO::FETCH_ASSOC);
    //$m = implode($one_data , $one_data1);
    print_r(json_encode($one_data1));