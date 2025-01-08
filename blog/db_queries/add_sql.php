<?php
require "../../db/config/config.php";
try{
$title = $_POST['title'];
$main_text = $_POST['main_text'];

header('Location: ../configuration_post.php'); 
$sql = "INSERT INTO optivai_blog (title, main_text) VALUES ( :title, :main_text)";
$stmt = $pdo -> prepare($sql);
$stmt -> bindParam(':title', $title);
$stmt -> bindParam(':main_text', $main_text);
$stmt -> execute();

}
catch(PDOException $e)
{
 echo "<br>". $e -> getMessage(). "<br>";
}
?>




