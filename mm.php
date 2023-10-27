<?php


$dbhost= "localhost";
$name ="root";
$password ="";
$dbmame = "familykitchen";
$email ="";

try{

    $conn=new PDO("mysql:hosr=$dbHost;dbname=$dbname,$dbpassword,$dbemail")
    echo "success";
}catch(Exception $e){
    echo $e->getMessage();
    exit();
}





?>