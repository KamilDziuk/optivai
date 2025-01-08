<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/conversation_ass.css">

    <title>Blog</title>
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
<script>

   let post = <?php echo json_encode($post); ?>






let printPost = document.querySelector("#printPost")
let getPost = post.map( content => {
   return `${content.title }<br>
   ${content.main_text }<br>
   ${content.auto_date }<br> `;
}
)
printPost.innerHTML = getPost;






</script>




</body>
</html>