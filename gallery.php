<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
</head>
<body>
     
<body>
    <div>

    <?php

$fotos = array ("1014033.jpg", "aaa.jpg", "and.jpg", "boo.jpg", "eat.jpg", "elixer.jpg", "morty.jpg", "pado.jpg", "portal.jpg", "rick.png");

foreach($fotos as $x)
{
    echo "<img class = 'gallerytumb' src='fotos/". $x ."'>";
}
?>
    </div>
</body>
</html>


      <?php echo $_SESSION['name']; ?>
     <a href="uitloggen.php">Uitloggen</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>