<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optivai - Conversation with assistant</title>
    <link rel="stylesheet" type="text/css" href="css/conversation_ass.css">
</head>
<body>
    <input class="thread_id" name="thread_id" type="text">
    <input class="conversation" name="conversation"  type="text">
    <input class="timestamp" name="timestamp" type="text">
  <button  class="submit">Submit</button>

  <br>


  <input class="deleteConversation" type="text">
  <button  class="conversation">Delete Conversation</button>
    <script>
        

     


document.querySelector(".submit").addEventListener("click", ()=> {

    let thread_id  =  document.querySelector(".thread_id").value;
    let conversation = document.querySelector(".conversation").value;
    let timestamp  =  document.querySelector(".timestamp").value;
    


let formData = new FormData();

formData.append("thread_id", thread_id);
formData.append("conversation", conversation);
formData.append("timestamp", timestamp);

fetch("db_add.php", {
method: "POST",
body: formData
})

});

document.querySelector(".conversation").addEventListener("click", ()=> {

let deleteConversation  =  document.querySelector(".deleteConversation").value;


let formData = new FormData();

formData.append("conversation", deleteConversation);

fetch("db_delete.php", {
method: "POST",
body: formData
})

});

    </script>
</body>
</html>


