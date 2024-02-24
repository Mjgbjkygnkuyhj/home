<?php 
if(isset($_POST['m_a'])){
    $datauser ="root";
    $datapass = "";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $setdata = $datadbase->prepare("INSERT INTO sc(sc_1) VALUE(:ip)");
    $setdata->bindParam("ip" ,$_POST['m_a']);
    $setdata->execute();
}
elseif(isset($_POST['m_a1'])){
    $datauser ="root";
    $datapass = "";
    $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
    $get2 = $datadbase->prepare("DELETE FROM  sc");
    $get2->execute();
}

 $datauser ="root";
 $datapass = "";
 $datadbase = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
 $send = $datadbase->prepare("SELECT * FROM sc");
 $send->execute();
 $one_data = $send->fetchAll(PDO::FETCH_ASSOC);
 print_r(json_encode($one_data));