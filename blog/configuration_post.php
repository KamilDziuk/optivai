<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" post_content="width=device-width, initial-scale=1.0">
<script  src="../js/post_js.js" async></script>
<link rel="stylesheet" type="text/css" href="../css/post_style.css">
    
<title> Post configuration</title>
</head>
<body>
<?php
 require_once "db_queries/get_sql.php";
?>
<script>
let post = <?php echo json_encode($post); ?> 
</script>
<div id="post_box">
<div id="post_display">
</div>
</div>
<div id="form_box">
<h3> Adding post</h3> 
<form action="db_queries/add_sql.php" method="POST"  enctype="multipart/form-data" >
<input type="text" class="title" name="title" placeholder="Tytle">  <br>
<input type="text" class="main_text" name="main_text" placeholder="Main text">
<br><br>
<input type="file" 
name="image"  class="image" class="image">
<input type="text" 
name="post_image"  class="post_image" >
<input type="submit"  class="submit"  name = "submit" value="Add post">
</form>

<h3> Remove post</h3>
<form action="db_queries/delete_sql.php" method="POST">
<input type="text" class="title" name="title"  placeholder="Tytle">
<input type="submit" value="Delete post">
</form>

<h3> Update title post</h3>
<form action="db_queries/update_title_sql.php" method="POST">
<input type="text" class="id_post" name="id_post"  placeholder="id"><br>
<input type="text" class="title" name="title" placeholder="Tytle">
<input type="submit" value="Update title"><br>
</form>

<h3>Update main text  post</h3>
<form action="db_queries/update_main_text_sql.php" method="POST">
<input type="text" class="id_post" name="id_post" placeholder="id">
<br>
<textarea rows="2" cols="10"  class="main_text" name="main_text"  placeholder="Main text"></textarea>
<br>
<input type="submit" value="Update main text">
</form>

</div>
</body>
</html>



