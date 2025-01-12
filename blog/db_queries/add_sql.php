<?php
ob_start();
require "../../db/config/config.php";
try{
$title = $_POST['title'];
$main_text = $_POST['main_text'];
$post_image = $_POST['post_image'];



//  $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
//  $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
//  if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
//  }
//  else
//  {
//  }

$tempname = $_FILES['image']['tmp_name'];
$file_name = $_FILES['image']['name'];
$folder = '../upload_image/images/' . $file_name;
move_uploaded_file($tempname, $folder);
$sql = "INSERT INTO optivai_blog (title, main_text, post_image) VALUES ( :title, :main_text, :post_image)";
$stmt = $pdo -> prepare($sql);
$stmt -> bindParam(':title', $title);
$stmt -> bindParam(':main_text', $main_text);
$stmt -> bindParam(':post_image', $post_image);
$stmt -> execute();
$stmt = null;
$pdo = null;
header('Location: ../configuration_post.php');
exit();
}
catch(PDOException $e)
{
 echo "<br>". $e -> getMessage(). "<br> ";
};
ob_end_flush();
?>


