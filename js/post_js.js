
let post_display = document.querySelector(".post_display");
let post_display_configuration = document.querySelector(".post_display_configuration");
let submit = document.querySelector(".submit");

if(submit) submit.addEventListener('click', () => {
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

const getPost = {

  getPosts() {

    return post.map(({ id_post, post_image, title, main_text, auto_date }) => ({
  
      id: id_post,
      image: post_image,
      title: title,
      main_text: main_text,
      date: auto_date
    }));
  },

//Admin
  get getPostsConfiguration() {
    return this.getPosts()
    .map(({ id, image,  title, main_text ,date}) => `<br> <div class ="post_background">
    <img class="images_configuration"  src="upload_image/images/${image}">
  
 <div class="post_title"> Id: ${id}<br>Title: ${title}</div> 
 <div  class="post_text"> Main text: ${main_text}</div>
<div  class="post_date"> Date: ${date}</div><br>
  `).join('\n');
   
  },

//Client
get getPostsClient() {
return this.getPosts()
.map(({  image,  title, main_text ,date }) => `<br><br><div class ="post_background">
<img class="images"  src="upload_image/images/${image}">
<br> 
<div class="post_title">${title}</div> 
<div  class="post_text ">${main_text}</div>
<div  class="post_date"> ${date}</div><br><br>
</div>
` ).join('\n');
      
  },

};

if (post_display) post_display.innerHTML = getPost.getPostsClient;
if (post_display_configuration) post_display_configuration.innerHTML = getPost.getPostsConfiguration;
