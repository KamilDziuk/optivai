
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
    .map(({ id, image,  title, main_text ,date}) => 

     `<br> <div class ="post_background${id}">
    <img class="images_configuration"  src="upload_image/images/${image}">
 <div class="post_title"> Id: ${id}<br>Title: ${title}</div>
 <div  class="post_text post_text_click${id}"> Main text: ${main_text}</div><div class="read${id}"></div> 
<div  class="post_date"> Date: ${date}</div><br>
</div>
`



)},


//Client
get getPostsClient() {
return this.getPosts()
.map(({ id, image,  title, main_text ,date }) => {
  
  let postContent =   ` <div class ="post  post_background${id}" >
  
<img class="images${id}  images "  src="upload_image/images/${image}">
<div class="post_title"> ${title}</div>
<div  class="post_text post_text_click${id}">  ${main_text}</div>
<div class="read read${id}"></div> 
<div  class="post_date">${date}</div>
</div>

`;
setTimeout( () =>
{
  let post_background = document.querySelector(`.post_background${id}`);
  
let post_text_click = document.querySelector(`.post_text_click${id}`);
let images = document.querySelector(`.images${id}`);

post_text_click.style.overflow = "hidden";
post_text_click.style.textOverflow  = "ellipsis";
post_text_click.style.whiteSpace  = "nowrap";
  
let read = document.querySelector(`.read${id}`);

read.innerHTML = "Read more...";

read.addEventListener('click', () =>
{



if(read.innerHTML === "Read more...")
{

  post_background.style.position = "absolute";
  post_background.style.width = "85%";
  post_background.style.padding = "3%";
  post_background.style.top = "-4.5%";
  images.style.width = "35%";
  post_text_click.style.overflow = "unset";
  post_text_click.style.textOverflow  = "unset";
  post_text_click.style.whiteSpace  = "unset";
  post_background.style.zIndex = "999";
  post_background.style.background= "#0d0d0d";
  post_background.style.borderRadius = "1.5%";
  post_display.style.display = "flexbox"
   read.style.color = "red"
  read.innerHTML = "Show less";
}

else if(read.innerHTML === "Show less")
{


  post_background.style.position = "relative";
  post_background.style.width = "20%";
  post_background.style.padding = "0.5%";
  images.style.width = "100%";
  post_text_click.style.overflow = "hidden";
  post_text_click.style.textOverflow  = "ellipsis";
  post_text_click.style.whiteSpace  = "nowrap";
  post_background.style.zIndex = "100";
  post_background.style.background= "rgba(62, 62, 62, 0.371";
  post_background.style.borderRadius = "1.5%";
  post_display.style.display = "flex";
 
  
  read.innerHTML = "Read more...";
}


})
},0)

return postContent;
 }



).join('\n');
      
  },

};




if (post_display) post_display.innerHTML = getPost.getPostsClient;
if (post_display_configuration) post_display_configuration.innerHTML = getPost.getPostsConfiguration;


