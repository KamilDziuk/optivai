<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/post_style.css">
 
    <title>Blog</title>
</head>
<body>
<?php
 require_once "db_queries/get_sql.php";
?>

<div class="post_display"></div>

<script>
let post = <?php echo json_encode($post); ?>


</script>
<script  src="../js/post_js.js" async></script>


</body>
</html>

