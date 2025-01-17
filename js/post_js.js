
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
setTimeout(() =>  {


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
let postContent = `<div class ="post  post_background${id}" >
<img class="images${id}  images "  src="upload_image/images/${image}">
<div class="post_title post_title${id}"> ${title}</div>
<div  class="post_text post_text_click${id}">  ${main_text}</div>
<div class=" read_text  read${id}"></div> 
<div  class="post_date   post_date${id}">${date}</div>
</div>`;  
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
<div class="read_text read${id}"></div> 
<div  class="post_date post_date${id}">Date: ${date}</div>
</div>`;
return postContent;
 })},

get postInteraction() {
return  this.getPosts().map(({ id}) => {

let post_background = document.querySelector(`.post_background${id}`);
let post_title = document.querySelector(`.post_title${id}`);


let post_date = document.querySelector(`.post_date${id}`);
let post_text_click = document.querySelector(`.post_text_click${id}`);
let images = document.querySelector(`.images${id}`);
let read = document.querySelector(`.read${id}`);







if(window.matchMedia("(max-width:1100px)").matches ){ 
  
  
  post_background.style.cssText  = "    position:relative; width:90% !important; border-radius:5%;  margin:0%; transform:translateX(-50%); left:50%; padding: 2% !important;  background:rgba(62, 62, 62, 0.371);   margin-top:3%;  margin-bottom:2%;";
  


  post_text_click.style.overflow = "hidden";
  post_text_click.style.textOverflow  = "ellipsis";
  post_text_click.style.whiteSpace  = "nowrap";
  read.innerHTML = "Read more...";
  post_date.style.fontSize  = "1em";
read.style.fontSize  = "1em"
  post_title.style.fontSize  = "3em";
post_text_click.style.fontSize  = "2.5em";


  read.addEventListener('click', () =>
    {  
      if(read.innerHTML === "Read more...")
        {
          if (post_display) { post_display.style.height = "100%"};
          if (post_display_configuration) { post_display_configuration.style.height = "100%"};
          post_background.style.position = "relative";
          post_text_click.style.overflow = "unset";
post_text_click.style.textOverflow  = "unset";
post_text_click.style.whiteSpace  = "unset";
if (post_display) { post_display.style.display = "flex"};
if (post_display_configuration) {   post_display_configuration.style.display = "flex"}
post_title.style.fontSize  = "4em";
post_date.style.fontSize  = "1em";
read.style.fontSize  = "1em"
post_text_click.style.fontSize  = "2.5em";
read.innerHTML = "Show less";
        }
        else if(read.innerHTML === "Show less")
          {
  post_background.style.cssText  = " position:relative; width:90% !important; border-radius:5%;  margin:0%; transform:translateX(-50%); left:50%; padding: 2% !important;  background:rgba(62, 62, 62, 0.371);   margin-top:3%;  margin-bottom:2%"
  if (post_display) { post_display.style.height = "100%"};
  if (post_display_configuration) { post_display_configuration.style.height = "100%"};
  read.style.fontSize  = "1em";
  images.style.width = "100%";
  post_text_click.style.overflow = "hidden";
  post_text_click.style.textOverflow  = "ellipsis";
  post_text_click.style.whiteSpace  = "nowrap";
  if (post_display) { post_display.style.display = "flex"};
  if (post_display_configuration) {   post_display_configuration.style.display = "flex"}
  post_title.style.fontSize  = "3em";
post_text_click.style.fontSize  = "2.5em";
post_date.style.fontSize  = "1em";

  read.style.color = " #1675c8";  
  read.innerHTML = "Read more...";
          }          
    })







  
}

else
{
post_background.style.cssText  = "position:relative; width:20%; height:0%; z-index:200; padding:0.5%; top:-4.5%; background:rgba(62, 62, 62, 0.371); border-radius:5%; width:calc(20% - 0%); margin:2%; "
post_date.style.fontSize  = "1em";
post_text_click.style.overflow = "hidden";
post_text_click.style.textOverflow  = "ellipsis";
post_text_click.style.whiteSpace  = "nowrap";
post_title.style.fontSize  = "1em";
post_text_click.style.fontSize  = "0.9em";

read.style.fontSize  = "1em";
read.innerHTML = "Read more...";  

read.addEventListener('click', () =>
  {  

  if(read.innerHTML === "Read more...")
  {
  
   
      if (post_display) { post_display.style.height = "865px"};
      if (post_display_configuration) { post_display_configuration.style.height = "865px"};
    post_background.style.cssText  = "position:absolute; width:96%; height:100%; z-index:999; padding:3%; top:0%; background: #000000; border-radius:0%;";
    read.style.fontSize  = "1em";
    post_title.style.fontSize  = "1em";
    post_text_click.style.fontSize  = "0.9em";
    post_date.style.fontSize  = "1em";

  images.style.width = "30%";
  post_text_click.style.overflow = "unset";
  post_text_click.style.textOverflow  = "unset";
  post_text_click.style.whiteSpace  = "unset";
  
  if (post_display) { post_display.style.display = "flex"};
  if (post_display_configuration) {   post_display_configuration.style.display = "flex"};
  
  read.style.color = "red";
  read.innerHTML = "Show less";
  }
  else if(read.innerHTML === "Show less")
  {
  
    post_background.style.cssText  = "position:relative; width:20%; height:0%; z-index:200; padding:0.5%; top:-4.5%; background:rgba(62, 62, 62, 0.371); border-radius:5%; width:calc(20% - 0%); margin:2%;";
  
    if (post_display) { post_display.style.display = "flex"};
    if (post_display_configuration) {   post_display_configuration.style.display = "flex"};
    if (post_display_configuration) { post_display_configuration.style.height = "100%"};
    if (post_display) { post_display.style.height = "100%"};
  post_date.style.fontSize  = "1em";
  read.style.fontSize  = "1em";
  post_title.style.fontSize  = "1em";
  post_text_click.style.fontSize  = "0.9em";
  images.style.width = "100%";
  post_text_click.style.overflow = "hidden";
  post_text_click.style.textOverflow  = "ellipsis";
  post_text_click.style.whiteSpace  = "nowrap";

  
  read.style.color = " #1675c8";  
  read.innerHTML = "Read more...";
    }
  })


}

})
}};

 
if(post_display)    { post_display.innerHTML = getPost.getPostsClient.join('\n');getPost.postInteraction};

if(post_display_configuration)  {    post_display_configuration.innerHTML = getPost.getPostsConfiguration.join('\n');getPost.postInteraction};

},1);