<?php
require "../../db/config/config.php";
header('Location: ../configuration_post.php'); 
try{
$title = $_POST['title'];
$sql = "DELETE FROM optivai_blog WHERE title = :title";
$stmt = $pdo -> prepare($sql);


$stmt -> bindParam(':title', $title);


$stmt -> execute();



}
catch(PDOException $e)
{
 echo "<br>". $e -> getMessage(). "<br>";
}
?>
