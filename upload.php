<?php session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	
    <link rel="stylesheet" type="text/css" href="layout.css" >
</head>
<body>

<ul>
  <li><a href="gallery.php">Home</a></li>
  <li><a href="upload.php">Upload</a></li>
  <li><a id= "welkom">Welkom <?php echo $_SESSION['name']; ?></a></li>
  <li id="uitloggen"><a href="uitloggen.php">   Uitloggen</a></li>
</ul>

     <form  id = "form "action="upload.php" method="post" enctype="multipart/form-data">
     	<h2>Upload your files</h2>
     
     	<label>Upload file</label>
     	<input type="file" name="ufoto" id="ufoto" placeholder="Je dikke plaatje"><br>
     	<button id = "button3" type="submit" name = "upload" value="upload plaatje"> Upload image</button>
     </form>
     <?php
     if (isset($_POST["upload"])) {
      $target_dir = "fotos/";
      $target_file = $target_dir . basename($_FILES["ufoto"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["ufoto"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }
      }
      
      // Check if file already exists
      if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }
      
      // Check file size
      if ($_FILES["ufoto"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }
      
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
      }
      
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["ufoto"]["tmp_name"], $target_file)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["ufoto"]["name"])). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
    }
    
  }else{
    header("Location: index.php");
    exit();
}
     ?>
</body>
</html>