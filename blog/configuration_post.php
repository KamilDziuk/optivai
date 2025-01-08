<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/conversation_ass.css">
    
    <title> Post configuration</title>
</head>
<body>
<div id="printPostBox">



<h3>Post</h3>
<div id="printPost">
</div>

</div>

<?php
 require_once "db_queries/get_sql.php";


?>

<h1> Adding post</h1>
<form action="db_queries/add_sql.php" method="POST">
<input type="text" class="title" name="title" placeholder="Tytle">
<input type="text" class="main_text" name="main_text" placeholder="Main text">
<input type="submit" value="Add post">
</form>

<h1> Remove post</h1>
<form action="db_queries/delete_sql.php" method="POST">
<input type="text" class="title" name="title"  placeholder="Tytle">
<input type="submit" value="Delete post">
</form>

<h1> Update title post</h1>
<form action="db_queries/update_title_sql.php" method="POST">
<input type="text" class="id_post" name="id_post"  placeholder="id">
<input type="text" class="title" name="title" placeholder="Tytle">
<input type="submit" value="Update title">
</form>

<h1>Update main text  post</h1>
<form action="db_queries/update_main_text_sql.php" method="POST">
<input type="text" class="id_post" name="id_post" placeholder="id">

<textarea    rows="2" cols="10"  class="main_text" name="main_text"  placeholder="Main text"></textarea>
<input type="submit" value="Update main text">
</form>
<script>

   let post = <?php echo json_encode($post); ?>






let printPost = document.querySelector("#printPost")
let getPost = post.map( content => {
   return ` <br>Id: ${content.id_post }<br>
   Title: ${content.title }<br>
   Main text: ${content.main_text }<br>
   Date: ${content.auto_date } <br>`;
}
).join('\n')
printPost.innerHTML = getPost;






</script>
</body>
</html>

