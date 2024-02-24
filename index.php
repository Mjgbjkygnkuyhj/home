<?php
$e = $_SERVER['REQUEST_URI'];
$q = filter_var($e , FILTER_SANITIZE_URL);
if($q == "/new/"){
    header("Location:http://192.168.0.190/new/home/index");
}
?>
