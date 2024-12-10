<?php
require "config/config.php";
try{
$sql = "SELECT * FROM  blog";

$stmt = $pdo -> prepare($sql);

$stmt -> execute();

$blog = $stmt -> fetchAll(PDO::FETCH_ASSOC);

}
catch( PDOException $e)
{
echo "Error". $e -> getMessage() ."<br>";
};
?>


