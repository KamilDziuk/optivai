<?php 
try{

   
$dbhost = '';
$dbname = '';
$dbuser = '';
$dbpass = '';
$pdo = new PDO("mysql:host=$dbhost; dbname=$dbname",$dbuser,$dbpass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 die( "Connect failed". $e -> getMessage());
}
?>













