<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="inloggen.css">

    <title>Document</title>
</head>
<body>
    <div> 
        

      <form action = "inlog.php" method= "post" > 
      <h2>Inloggen </h2>
      <?php if (isset($_GET['error'])) { ?>
            <p class = "error"><?php echo $_GET['error']; ?> </p>
      <?php } ?>

      
      <label> Gebruikersnaam </label>
      <input type = "text" name = "gnaam" placeholder = "Gebruikersnaam"> <br>
      <label> Wachtwoord </label>
      <input type = "text" name = "wachtwoord" placeholder = "Wachtwoord"> <br>
      <button type = "submit"> Inloggen </button>
      </form>

    
</body>
</html>