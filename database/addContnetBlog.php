<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optivai - Contnet Blog</title>
    <link rel="stylesheet" type="text/css" href="css/blog.css">
</head>
<body>
    <input class="title_post" type="text">
    <input class="main_post" type="text">
    
  <button  class="submit">test</button>

  <br>


  <input class="postDelete" type="text">
  <button  class="delete_post">Delete post</button>
    <script>
        

     


document.querySelector(".submit").addEventListener("click", ()=> {

    let title_post  =  document.querySelector(".title_post").value;
    let main_post = document.querySelector(".main_post").value;

let formData = new FormData();

formData.append("title_post", title_post);
formData.append("main_post", main_post);

fetch("db_add.php", {
method: "POST",
body: formData
})

});

document.querySelector(".delete_post").addEventListener("click", ()=> {

let postDelete  =  document.querySelector(".postDelete").value;


let formData = new FormData();

formData.append("title_post", postDelete);

fetch("db_delete.php", {
method: "POST",
body: formData
})

});

    </script>
</body>
</html>


