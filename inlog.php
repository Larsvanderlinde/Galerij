<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="layout.css">
<link href="index.php">

    <title>Document</title>
</head>
    <?php
    session_start ();
    include "database_connection.php";
    if (isset($_POST['gnaam']) && isset($_POST['gnaam'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $gnaam = validate($_POST['gnaam']);
        $ww = validate($_POST['wachtwoord']);

        if (empty($gnaam)) {
            header("Location: index.php?error=Gebruikersnaam is verplicht");
            exit();

        } else if(empty($ww)) {
            header("Location: index.php?error=Wachtwoord is verplicht");
            exit();

        }else{
            $sql = "SELECT * FROM users WHERE user_name='$gnaam' AND password = '
                $ww'";
            $result = mysqli_query($conn, $sql);

            

            }

        }


     else{
        header("Location: index.php");
        exit();
    }
    ?>

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