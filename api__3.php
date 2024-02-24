<?php
$datauser ="root";
$datapass = "";
$datadba = new PDO("mysql:host=localhost;dbname=project;" , $datauser, $datapass);
$snd = $datadba->prepare("SELECT * FROM ff2");
$snd->execute();
$dat = $snd->fetchAll(PDO::FETCH_ASSOC);
print_r(json_encode($dat));
?>