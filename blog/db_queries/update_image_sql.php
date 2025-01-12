<?php
// ob_start();
// require "../../db/config/config.php";

// try{
// $post_image = $_POST['post_image'];
// $id_post = $_POST['id_post'];
// $tempname = $_FILES['image']['tmp_name'];
// $file_name = $_FILES['image']['name'];
// $folder = '../upload_image/images/' . $file_name;
// move_uploaded_file($tempname, $folder);

// $sql = "UPDATE optivai_blog SET post_image  = :post_image WHERE id_post = :id_post";
// $stmt = $pdo -> prepare($sql);

// $stmt -> bindParam(':post_image', $post_image);
// $stmt -> bindParam(':id_post', $id_post);
// $stmt -> execute();
// $stmt = null;
// $pdo = null;
// header('Location: ../configuration_post.php '); 
// die();
// }
// catch(PDOException $e)
// {
//  echo "<br>". $e -> getMessage(). "<br>";
// };
// ob_end_flush();
?>




