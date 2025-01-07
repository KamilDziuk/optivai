<?php 
try{

   
$dbhost = '';
$dbname = '';
$dbuser = '';
$dbpass = '';
$pdo = new PDO("mysql:host=$dbhost; dbname=$dbname",$dbuser,$dbpass);
}
catch(PDOException $e)
{
echo "Error". $e -> getMessage()."br";
};
?>













