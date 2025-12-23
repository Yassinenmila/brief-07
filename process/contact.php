<?php
include __DIR__ . '/data/SGBD.php';

if (isset($_POST['submit'])) {

    $nom   = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';
    $desc  = $_POST['desc'] ?? '';

    if (empty($nom) || empty($email) || empty($desc)) {
        $_SESSION['toast'] = "Veuillez remplir tous les champs !!";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['toast'] = "Veuillez saisir un email valide !!";
    }
    else {
        $sql = $conn->prepare(
            "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)"
        );
        $sql->bind_param("sss", $nom, $email, $desc);
        $sql->execute();

        $_SESSION['toast'] = "Message envoyé avec succès !!";
    }
}
?>

<?php require_once __DIR__ . '/../views/contact.views.php'; ?>
