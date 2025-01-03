<?php
require "config/config.php";
try{
$sql = "SELECT * FROM  optivai";

$stmt = $pdo -> prepare($sql);

$stmt -> execute();

$optivai = $stmt -> fetchAll(PDO::FETCH_ASSOC);

}
catch( PDOException $e)
{
echo "Error". $e -> getMessage() ."<br>";
};
?>


