<?php
$header="nmilayassine0000@gmail.com";
$nom = $_POST['nom'] ?? "";
$email = $_POST['email'] ?? "";
$desc = $_POST['desc'] ?? "";

if (empty($nom) || empty($email) || empty($desc)) {
    $_SESSION['toast']="veuiller remplir tout les champs !!";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['toast'] ="veuiller saisir un email valide !!";
} else {
    $_SESSION['toast'] ="Message envoyer avec succes !!";
}
?>
<?php require_once __DIR__ . "/../views/contact.views.php" ?>