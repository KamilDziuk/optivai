<?php
ob_start();
require "../../db/config/config.php";

try{
$main_text = $_POST['main_text'];
$id_post = $_POST['id_post'];


$sql = "UPDATE optivai_blog SET main_text  = :main_text WHERE id_post = :id_post";
$stmt = $pdo -> prepare($sql);

$stmt -> bindParam(':main_text', $main_text);
$stmt -> bindParam(':id_post', $id_post);
$stmt -> execute();
$stmt = null;
$pdo = null;
header('Location: ../configuration_post.php '); 
die();
}
catch(PDOException $e)
{
 echo "<br>". $e -> getMessage(). "<br>";
};
ob_end_flush();
?>




