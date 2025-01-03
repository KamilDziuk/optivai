<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optivai - Conversation </title>
    <link rel="stylesheet" type="text/css" href="css/conversation_ass.css">
</head>
<body>
<?php require "database/db_get.php";?>
<div class="conversationElement"></div>
    <script>
  

let optivai = <?php echo json_encode($optivai);?>;

   let conversationContent =  optivai.map(conversationItems => 
{
    return  `${conversationItems.thread_id	} <br> ${conversationItems.conversation	} <br> ${conversationItems.timestamp} <br>`;
}

   );

   document.querySelector('.optivaiElement').innerHTML = blogContent;
   			

    </script>
</body>
</html>