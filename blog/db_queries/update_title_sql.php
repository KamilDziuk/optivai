<?php
ob_start();
require "../../db/config/config.php";
require "get_password_sql.php";
header('Location: ../configuration_post.php '); 
try{

    

$password = $_POST['password'];

  if(   $key["password_form"] === $password  ) {
$title = $_POST['title'];
$id_post = $_POST['id_post'];


$sql = "UPDATE optivai_blog SET title  = :title WHERE id_post = :id_post";
$stmt = $pdo -> prepare($sql);

$stmt -> bindParam(':title', $title);
$stmt -> bindParam(':id_post', $id_post);
$stmt -> execute();
$stmt = null;
$pdo = null;
header('Location: ../configuration_post.php'); 
die();
}
else
{
    header('Location: ../configuration_post.php?error=$em');
}
}
catch(PDOException $e)
{
 echo "<br>". $e -> getMessage(). "<br>";
};
ob_end_flush();
?>




