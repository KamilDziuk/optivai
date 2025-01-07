<?php
require "../db/config/config.php";
header('Location: delete_post.php'); 
try{
$title = $_POST['title'];
$sql = "DELETE FROM optivai_blog WHERE title = :title";



$stmt -> bindParam(':title', $title);


$stmt -> execute();


$stmt = null;

$pdo = null;
}
catch(PDOException $e)
{
 echo "<br>". $e -> getMessage(). "<br>";
}
?>
