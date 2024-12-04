<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optivai - Blog</title>
    <link rel="stylesheet" type="text/css" href="css/blog.css">
</head>
<body>
<?php require "database/db_get.php";?>
<div class="blogElement"></div>
    <script>
  

let blog = <?php echo json_encode($blog);?>;

   let blogContent =  blog.map(blogItems => 
{
    return  `${blogItems.title_post} <br> ${blogItems.main_post} <br> ${blogItems.date_post} <br>`;
}

   );

   document.querySelector('.blogElement').innerHTML = blogContent;
   			

    </script>
</body>
</html>