<?php
ob_start();
require "../db/config/config.php";
require "db_queries/get_password_sql.php";
try{
 
    
    $password = $_POST['password'];
    
      if(   $key["password_form"] === $password  ) {
$id_post = $_POST['id_post'];
$page_name = $_POST['page_name'];

if(!empty($id_post ) )
{


    unlink($page_name . '.php');


  
    
    unlink('id_post_'. $id_post .'_get_sql.php');
  
$sql = "DELETE FROM optivai_blog WHERE id_post = :id_post";
$stmt = $pdo -> prepare($sql);


$stmt -> bindParam(':id_post', $id_post);


$stmt -> execute();

$stmt = null;
$pdo = null;
header('Location: configuration_post.php'); 
die();
}
}
else
{
    header('Location: configuration_post.php?error=$em');
}
}
catch(PDOException $e)
{
 echo "<br>". $e -> getMessage(). "<br> ";
}
ob_end_flush();
?>
