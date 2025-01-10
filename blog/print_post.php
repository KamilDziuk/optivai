<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" post_content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/post_style.css">
    <script  src="../js/post_js.js" async></script>
    <title>Blog</title>
</head>
<body>
<?php
 require_once "db_queries/get_sql.php";
?>
<div id="post_box">
<div id="post_display"></div>
</div>
<script>
let post = <?php echo json_encode($post); ?>
</script>

</body>
</html>