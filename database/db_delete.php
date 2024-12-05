


<?php 
require "config/config.php";
try
{


$title_post = $_POST['title_post'];


$sql = "DELETE FROM blog WHERE title_post = '$title_post'";
$tmts = $pdo -> prepare($sql);

$tmts -> execute();

$blog = $tmts -> fetchAll(PDO::FETCH_ASSOC);




}
catch(PDOException $e)
{
echo "error". $e -> getMessage()."br";
};

?>