<?php
$server ='localhost';
$user   ='root';
$pass   ='';
$db     ='hakim';

$dsn = "mysql:host={$server};dbname={$db}";
$con = null;

try{
    $conn = new PDO($dsn, $user, $pass);
}catch (Exception $ex){
    die("Error : ".$ex->getMessage());
}
