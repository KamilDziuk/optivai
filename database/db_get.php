<?php
require "config/config.php";
try{
$sql = "SELECT * FROM  blog";

$tmts = $pdo -> prepare($sql);

$tmts -> execute();

$blog = $tmts -> fetchAll(PDO::FETCH_ASSOC);

}
catch( PDOException $e)
{
echo "Error". $e -> getMessage() ."<br>";
};
?>


