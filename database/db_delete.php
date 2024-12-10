


<?php 
require "config/config.php";
try
{


$title_post = $_POST['title_post'];


$sql = "DELETE FROM blog WHERE title_post = :title_post";
$stmt = $pdo -> prepare($sql);

$stmt -> bindParam(':title_post', $title_post);

$stmt -> execute();

}
catch(PDOException $e)
{
echo "error". $e -> getMessage()."br";
};

?>