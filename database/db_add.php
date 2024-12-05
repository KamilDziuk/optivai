<?php
require "config/config.php";
try{
    $title_post = $_POST['title_post'];
    $main_post = $_POST['main_post'];

$sql = "INSERT INTO blog (title_post, main_post ) VALUES ('$title_post', '$main_post')";

$tmt = $pdo -> prepare($sql);

$tmt -> execute();

$blog = $tmt -> fetchAll(PDO::FETCH_ASSOC);

}
catch( PDOException $e)
{
echo "Error". $e -> getMessage() ."<br>";
};
?>


