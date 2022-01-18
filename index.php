<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Gebruikersnaam</label>
     	<input type="text" name="uname" placeholder="Gebruikersnaam"><br>

     	<label>Wachtwoord</label>
     	<input type="password" name="password" placeholder="Wachtwoord"><br>

     	<button type="submit">Inloggen</button>
     </form>
</body>
</html>