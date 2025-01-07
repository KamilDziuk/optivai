<?php
require "../db/config/config.php";
try{
$title = $_POST['title'];
$post = $_POST['post'];

header('Location: ../add_post.php'); 
$sql = "INSERT INTO optivai_blog (title,post) VALUES ( :title, :post)";
$stmt = $pdo -> prepare($sql);
$stmt -> bindParam(':title', $title);
$stmt -> bindParam(':post', $post);
$stmt -> execute();

}
catch(PDOException $e)
{
 echo "<br>". $e -> getMessage(). "<br>";
}
?>




