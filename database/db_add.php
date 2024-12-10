<?php
require "config/config.php";
try{
    $title_post = $_POST['title_post'];
    $main_post = $_POST['main_post'];

$sql = "INSERT INTO blog (title_post, main_post ) VALUES (:title_post, :main_post)";

$stmt = $pdo -> prepare($sql);


$stmt ->  bindParam(':title_post', $title_post);
$stmt ->  bindParam(':main_post', $main_post);


$stmt -> execute();



}
catch( PDOException $e)
{
echo "Error". $e -> getMessage() ."<br>";
};
?>


