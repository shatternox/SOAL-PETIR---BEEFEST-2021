<?php

$db['db_host'] = "db";
$db['db_user'] = "root";
$db['db_pass'] = "5E^FVZjKu4&te!Ed8p8";
$db['db_name'] = "ctf_beefest";

foreach($db as $key => $value){

    define(strtoupper($key), $value);

}

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$connect){
    die("Connection Failed");
} 


?>