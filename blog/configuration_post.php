<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="image/cropped-logo-512x512-1.png">
<link rel="stylesheet" type="text/css" href="../css/post_style.css">
<script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
<title> Post configuration</title>
</head>
<body>
<?php
 require_once "db_queries/get_sql.php";
 
?>

<div id="form_box">
<h3> Adding post</h3> 
<form action="db_queries/add_sql.php" method="POST"  enctype="multipart/form-data" >
<textarea type="text" class="title" name="title" placeholder="Tytle"></textarea>
<textarea   class="main_text " name="main_text"  placeholder="Main text"></textarea>
<input type="file"  class="image" name="image" > 
<input type="text"   class="post_image" name="post_image"   >
<input     type="submit"  class="submit"  name="submit" value="Add post"> 
</form>

<h3>Remove post</h3>
<form action="delete_sql.php" method="POST">
<input type="text" class="id_post" name="id_post"  placeholder="id">
<input type="text" class="page_name" name="page_name"  placeholder="page_name">
<input type="submit" value="Delete post">
</form>


<h3> Update title post</h3>
<form action="db_queries/update_title_sql.php" method="POST">
<input type="text" class="id_post" name="id_post"  placeholder="id">
<textarea type="text" class="title" name="title" placeholder="Tytle"></textarea>
<input type="submit" value="Update title"><br>
</form>

<h3>Update main text  post</h3>
<form action="db_queries/update_main_text_sql.php" method="POST">
<input type="text" class="id_post" name="id_post" placeholder="id">

<textarea   class="main_text  update_main_text" name="main_text"  placeholder="Main text"></textarea>

<input type="submit" value="Update main text">
</form>

</div>

<div class="post_display_configuration">
</div>
main_text

<script>
let post = <?php echo json_encode($post); ?> 

document.querySelector('.page_name').style.display = "none";

</script>
<?php



$id_post = $_POST['id_post'];
$page_name = $_POST['page_name'];
$title = $_POST['title'];

  if (!empty($id_post ) &&  !empty($page_name ) ) {

$get_sql_file_name = "id_post_". $id_post . "_get_sql.php" ;

$file_name =  $page_name . ".php";
 
    $file_content = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="image/cropped-logo-512x512-1.png">
    <link rel="stylesheet" type="text/css" href="../css/post_style.css">
 
    <title>'.$title .'</title>
</head>
<body>
<?php
 require_once "'.$get_sql_file_name.'";
?>
    <iframe class="window_menu" src="https://optivai.pl/head/"></iframe>
<div class="open_post_display"></div>

<script>
let post = <?php echo json_encode($post); ?>

</script>
<script  src="../js/post_js.js" async></script>


</body>
</html>
';

file_put_contents($file_name, $file_content);

    $get_sql_file_content = '
<?php
require "../db/config/config.php";

$sql = "SELECT * FROM `optivai_blog` WHERE id_post  = '.$id_post.'";

$stmt = $pdo -> prepare($sql);

$stmt -> execute();

$post = $stmt -> fetchAll(PDO::FETCH_ASSOC);

$stmt = null;
$pdo = null;
?>
';

file_put_contents($get_sql_file_name, $get_sql_file_content);
if (file_exists($file_name) &&  file_exists($get_sql_file_name)  )

{
  
echo 'Files'.$file_name.' and '. $get_sql_file_name. 'already exisis';
}
else
{
  echo 'Adding  files'.$file_name.' and '. $get_sql_file_name;
}
}
?>
<script  src="../js/post_js.js" async></script>
<script>

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
</script>
</body>
</html>




