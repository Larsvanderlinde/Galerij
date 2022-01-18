<?php

$snaam= "localhost";
$gnaam= "root";
$wachtwoord = "";

$db_naam = "inloggen";

$conn = mysqli_connect($snaam, $gnaam, $wachtwoord, $db_naam);

if (!$conn) {
	echo "Connection failed!";
}