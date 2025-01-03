


<?php 
require "config/config.php";
try
{


$title_post = $_POST['conversation'];


$sql = "DELETE FROM optivai WHERE conversation = :conversation";
$stmt = $pdo -> prepare($sql);



$stmt ->  bindParam(':conversation	', $conversation	);



$stmt -> execute();

}
catch(PDOException $e)
{
echo "error". $e -> getMessage()."br";
};

?>