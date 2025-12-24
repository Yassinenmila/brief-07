<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sub_cont'])) {

    $nom   = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';
    $desc  = $_POST['desc'] ?? '';

    $stmt = $conn->prepare(
        "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)"
    );

    if (!$stmt) {
        die("Erreur SQL : " . $conn->error);
    }

    $stmt->bind_param("sss", $nom, $email, $desc);

    if ($stmt->execute()) {
        echo "Message envoyé avec succès !!";
    } else {
        echo "Erreur lors de l'envoi !!";
    }
}

require_once __DIR__ . '/../views/contact.views.php';
