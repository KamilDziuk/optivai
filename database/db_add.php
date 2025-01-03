<?php
require "config/config.php";
try{
    $thread_id		 = $_POST['thread_id		'];
    $conversation = $_POST['conversation	'];
    $timestamp = $_POST['timestamp'];
$sql = "INSERT INTO optivai (thread_id		, conversation,timestamp	 ) VALUES (:thread_id		, :conversation , :timestamp	)";

$stmt = $pdo -> prepare($sql);


$stmt ->  bindParam(':thread_id		', $thread_id		);
$stmt ->  bindParam(':conversation	', $conversation	);
$stmt ->  bindParam(':timestamp	', $timestamp	);

$stmt -> execute();



}
catch( PDOException $e)
{
echo "Error". $e -> getMessage() ."<br>";
};
?>


