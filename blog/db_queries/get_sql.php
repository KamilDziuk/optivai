<?php
require "../db/config/config.php";

$sql = "SELECT * FROM optivai_blog ";


$stmt = $pdo -> prepare($sql);


$stmt -> execute();


$post = $stmt -> fetchAll(PDO::FETCH_ASSOC);


$stmt = null;
$pdo = null;

?>


