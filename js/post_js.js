

ClassicEditor
.create(document.querySelector('.main_text'))

.then(editor => {
  console.log('The editor has been loaded!', editor);
})
.catch(error => {
  console.error('An error occurred while loading the editor:', error);
});



ClassicEditor
.create(document.querySelector('.update_main_text'))

.then(editor => {
  console.log('The editor has been loaded!', editor);
})
.catch(error => {
  console.error('An error occurred while loading the editor:', error);
});


let open_post_display = document.querySelector(".open_post_display");
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
//Client
get getPostsClient() {
return this.getPosts()
.map(({ id, image,  title, main_text ,date }) => {  
let postContent = `



<div class ="post  post_background${id}">
<img class="images${id}  images "  src="upload_image/images/${image}">
<div class="post_title post_title${id}"> ${title}</div>
<div  class="post_text post_text_click${id}">  ${main_text}</div>
<a  target="_blank" href="https://optivai.pl/optivai_blog/blog/post_number_${id}.php" class="read_text read${id}">Read more...</a> 

<div  class="post_date ">${date}</div>
</div>
`;  
return postContent;
}
)},


get getOpenPostsClient() {
  return this.getPosts()
  .map(({ id, image, title, main_text ,date }) => {  
  let postContent = `
  <div class ="post  post_background${id}">
  <img class="images${id}  images "  src="upload_image/images/${image}">
  <div class="post_title post_title${id}"> ${title}</div>
  <div  class="post_text post_text_click${id}">  ${main_text}</div>
  <a target="_blank"  href="https://optivai.pl/blog/"  class="read_text" style ="color: red;">Back...</a> 
  <div  class="post_date ">${date}</div>
  </div>
  `;  
  return postContent;
  }
  )},
  
//Admin

get getPostsConfiguration() {
return this.getPosts()
.map(({ id, image,  title, main_text ,date }) => {  
let postContent = ` 













<div class ="post   post_background${id}" > 
<img class="images${id}  images "  src="upload_image/images/${image}">
<div class=" post_title post_title${id}"> ID: ${id} <br> Title: ${title}</div>
<div  class="post_text post_text_click${id}">Text: ${main_text}</div>
<a  target="_blank" href="https://optivai.pl/optivai_blog/blog/post_number_${id}.php"  class="read_text read${id}">Read more...</a> 
<div  class="post_date ">Date: ${date}</div>
</div>`;

return postContent;
 })},

get postInteraction() {
return  this.getPosts().map(({id}) => {


let page_name = id;
let id_post = id;

let fomrData = new FormData();

fomrData.append("page_name",page_name);
fomrData.append("id_post",id_post);



fetch("../blog/configuration_post.php",
  {
    method: "POST",
    body: fomrData
  }
)

let post_background = document.querySelector(`.post_background${id}`);
let post_text_click = document.querySelector(`.post_text_click${id}`);
let images = document.querySelector(`.images${id}`);


if(window.matchMedia("(max-width:850px)").matches ){ 
  
  post_text_click.style.overflow = "hidden";
  post_text_click.style.textOverflow  = "ellipsis";
  post_text_click.style.whiteSpace  = "nowrap";



      if(window.location.href ===  `https://optivai.pl/optivai_blog/blog/post_number_${id}.php`)
        {
          if (post_display) { post_display.style.height = "100%"};
          if (post_display_configuration) { post_display_configuration.style.height = "100%"};
          post_background.style.position = "relative";
          post_text_click.style.overflow = "unset";
    
post_text_click.style.textOverflow  = "unset";
post_text_click.style.whiteSpace  = "unset";
if (post_display) { post_display.style.display = "flex"};
if (post_display_configuration) {   post_display_configuration.style.display = "flex"};
        }
        else 
          {

  if (post_display) { post_display.style.height = "100%"};
  if (post_display_configuration) { post_display_configuration.style.height = "100%"};

  images.style.width = "100%";
  post_text_click.style.overflow = "hidden";
  post_text_click.style.textOverflow  = "ellipsis";
  post_text_click.style.whiteSpace  = "nowrap";
  if (post_display) { post_display.style.display = "flex"};
  if (post_display_configuration) {   post_display_configuration.style.display = "flex"};

}              
}
else
{
post_text_click.style.overflow = "hidden";
post_text_click.style.textOverflow  = "ellipsis";
post_text_click.style.whiteSpace  = "nowrap";
if(window.location.href ===  `https://optivai.pl/optivai_blog/blog/post_number_${id}.php`)
  {   
if (post_display) { post_display.style.height = "100%"};
if (post_display_configuration) { post_display_configuration.style.height = "100%"};
    post_background.style.cssText  = "position:relative; width:94%; height:100%; z-index:999; padding:3%; top:0%; background: #000000; border-radius:0%;top:-4.5%;";
  images.style.width = "30%";
  post_text_click.style.overflow = "unset";
  post_text_click.style.textOverflow  = "unset";
  post_text_click.style.whiteSpace  = "unset";
  
  if (post_display) { post_display.style.display = "flex"};
  if (post_display_configuration) {   post_display_configuration.style.display = "flex"};
  

  }
  else
  {
  
    post_background.style.cssText  = "position:relative; width:20%; height:0%; z-index:200; padding:0.5%; background:rgba(62, 62, 62, 0.371); border-radius:5%; width:calc(20% - 0%); margin:2%;";
  
if (post_display) { post_display.style.display = "flex"};
if (post_display_configuration) {   post_display_configuration.style.display = "flex"};
if (post_display_configuration) { post_display_configuration.style.height = "100%"};
if (post_display) { post_display.style.height = "100%"};

  post_text_click.style.fontSize  = "0.9em";
  images.style.width = "100%";
  post_text_click.style.overflow = "hidden";
  post_text_click.style.textOverflow  = "ellipsis";
  post_text_click.style.whiteSpace  = "nowrap";


    }
}
})
}};

if(post_display)    { post_display.innerHTML = getPost.getPostsClient.join('\n');getPost.postInteraction};

if(open_post_display)   { open_post_display.innerHTML = getPost.getOpenPostsClient.join('\n');getPost.postInteraction};

if(post_display_configuration)  {    post_display_configuration.innerHTML = getPost.getPostsConfiguration.join('\n');getPost.postInteraction};

