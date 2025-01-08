<?php
require "../../db/config/config.php";
header('Location: ../configuration_post.php '); 
try{
$title = $_POST['title'];
$id_post = $_POST['id_post'];


$sql = "UPDATE optivai_blog SET title  = :title WHERE id_post = :id_post";
$stmt = $pdo -> prepare($sql);

$stmt -> bindParam(':title', $title);
$stmt -> bindParam(':id_post', $id_post);
$stmt -> execute();

}
catch(PDOException $e)
{
 echo "<br>". $e -> getMessage(). "<br>";
}
?>




