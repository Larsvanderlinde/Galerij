<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="layout.css">
<link href="index.php">

    <title>Document</title>
</head>
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