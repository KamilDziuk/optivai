<?php 
try{

$dbhost = 'mariadb1011.server171344.nazwa.pl';
$dbname = 'server171344_optivai';
$dbuser = 'server171344_optivai';
$dbpass = 'c7ln@miWRokamaf6sp?ti_r0pAwl@hO8Ubo8ran';
$pdo = new PDO("mysql:host=$dbhost; dbname=$dbname",$dbuser,$dbpass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 die( "Connect failed". $e -> getMessage());
}
?>













