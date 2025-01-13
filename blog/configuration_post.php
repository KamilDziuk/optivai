<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" post_content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="../css/post_style.css">
    
<title> Post configuration</title>
</head>
<body>
<?php
 require_once "db_queries/get_sql.php";
 
?>

<div id="post_configuration_box">
<div class="post_display_configuration">
</div>
</div>
<div id="form_box">
<h3> Adding post</h3> 
<form action="db_queries/add_sql.php" method="POST"  enctype="multipart/form-data" >
<input type="text" class="title" name="title" placeholder="Tytle"> 
<textarea rows="2" cols="10"  class="main_text" name="main_text"  placeholder="Main text"></textarea>
<input type="file"  class="image" name="image" > 
<input type="text"   class="post_image" name="post_image"   >
<input type="submit"  class="submit"  name="submit" value="Add post"> 
</form>

<h3>Remove post</h3>
<form action="db_queries/delete_sql.php" method="POST">
<input type="text" class="id_post" name="id_post"  placeholder="id">
<input type="submit" value="Delete post">
</form>


<h3> Update title post</h3>
<form action="db_queries/update_title_sql.php" method="POST">
<input type="text" class="id_post" name="id_post"  placeholder="id">
<input type="text" class="title" name="title" placeholder="Tytle">
<input type="submit" value="Update title"><br>
</form>

<h3>Update main text  post</h3>
<form action="db_queries/update_main_text_sql.php" method="POST">
<input type="text" class="id_post" name="id_post" placeholder="id">

<textarea rows="2" cols="10"  class="main_text" name="main_text"  placeholder="Main text"></textarea>

<input type="submit" value="Update main text">
</form>

</div>

<script>
let post = <?php echo json_encode($post); ?> 


</script>
<script  src="../js/post_js.js" async></script>
</body>
</html>


