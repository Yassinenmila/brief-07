
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST['nom'] ?? "";
    $email = $_POST['email'] ?? "";
    $desc = $_POST['desc'] ?? "";

    if(empty($nom) || empty($email) || empty($desc)){
        $message= "veuiller remplir tout les champs !!";
        $type = "error";
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $message= "veuiller saisir un email valid !! " ; 
        $type = "error"; 
    }
    else{
        $message= "Message envoyer avec succes !!";
        $type="succes";
    }
}
 include __DIR__.'/../views/contact.views.php';
?>
