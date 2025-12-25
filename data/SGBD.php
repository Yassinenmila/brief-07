<?php 

$host = "localhost";
$user = "yassine";
$pass = "Yassine34.";
$dbname = "shemas";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Erreur connexion : " . mysqli_connect_error());
}

?>