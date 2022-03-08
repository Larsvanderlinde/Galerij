<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


  $target_dir = "fotos/";
  $images = scandir($target_dir);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
<ul>
  <li><a href="gallery.php">Home</a></li>
  <li><a href="upload.php">Upload</a></li>
  <li id="uitloggen"><a href="uitloggen.php"><?php echo $_SESSION['name']; ?>   Uitloggen</a></li>
</ul>
     

    <?php foreach ($images as $image) {
      $path_parts = pathinfo( $target_dir.$image);
      if(in_array($path_parts['extension'],['jpg', 'png'])) {
      
      ?>
      <img class="gallerytumb" src='<?= $target_dir.$image ?>'>
      <?php }} ?>



      
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>