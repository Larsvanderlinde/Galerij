<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
    <div> 
        <h3>Login scherm zie je toch </h3>

        <form method = "POST"> 
            <table>
                 <tr>
                     <td> Gebruikersnaam </td> 
                     <td> <input type = "text" name = "gebruikersnaam" >  </td>
                </tr>
                <tr>
                 <td> Wachtwoord    </td> 
                 <td> <input type = "text" name = "wachtwoord"> </td>
                 <tr>
                     <td></td>
                     <td> <input type = "submit" value = "login"> </td>
                </tr>
            </table>
        </form>

    </div>

    <?php
        if ($_POST) {
            $gb=$_POST['gebruikersnaam'];
            $ww=$_POST['wachtwoord'];

            if ( $gb=='LarsMan1222' && $ww=='lars' ) {
                header("location:gallery.php");
                exit ();
            }

            else {
                echo "Verkeerde gebruikersnaam/wachtwoord";
            }
        }
        

    ?>

    
</body>
</html>