<?php
ob_start();
require "../../db/config/config.php";
try{
$title = $_POST['title'];
$sql = "DELETE FROM optivai_blog WHERE title = :title";
$stmt = $pdo -> prepare($sql);


$stmt -> bindParam(':title', $title);


$stmt -> execute();

$stmt = null;
$pdo = null;
header('Location: ../configuration_post.php'); 
die();

}
catch(PDOException $e)
{
 echo "<br>". $e -> getMessage(). "<br> ";
}
ob_end_flush();
?>
