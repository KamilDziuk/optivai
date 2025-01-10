document.querySelector('.submit').addEventListener('click',  function() {
    let image = document.querySelector('.image');
    let files = image.files; 
    let file = files[0]; 
    let fileName = file.name;

let fomrData = new FormData();

let post_image = document.querySelector('.post_image').value = fileName;
fomrData.append('post_image',post_image);

fetch("db_queries/add_sql.php", {

method:"POST",
body: fomrData

})
});
   
let post_display = document.querySelector("#post_display");
let getPost = post.map( post_content => {
return `<br> <div class ="post_background">
<img class="images"  src="upload_image/images/${post_content.post_image}">
<br> Id: ${post_content.id_post }<br>
Title: ${post_content.title }<br>
Main text: ${post_content.main_text }<br>
Date: ${post_content.auto_date }</div><br>`
}).join('\n');
post_display.innerHTML = getPost;



