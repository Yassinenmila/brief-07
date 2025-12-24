<?php 

if(isset($_POST['sub_sign']) && $_SERVER['REQUEST_METHOD']==='POST'){
    $username= $_POST['name']?? '';
    $email=$_POST['email'] ?? '';
    $pass=$_POST['password'] ?? '';
    $conf=$_POST['conf'] ?? '';

    if ($pass !== $conf) {
        echo "Les mots de passe ne correspondent pas !";
        exit;
    }

    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    if (!$stmt) {
        die("Erreur SQL : " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "utilisateur deja inscrit !!";
    }

    // Hash du mot de passe
    $hashed = password_hash($pass, PASSWORD_DEFAULT);

    // Insertion
    $stmt = $conn->prepare(
        "INSERT INTO users (name, email, password) VALUES (?, ?, ?)"
    );

    if (!$stmt) {
        die("Erreur SQL : " . $conn->error);
    }

    $stmt->bind_param("sss", $username, $email, $hashed);

    if ($stmt->execute()) {
        header("Location: /login.php");
    } else {
        echo "Erreur lors de l'inscription : " . $stmt->error;
    }
}

?>

<?php require_once __DIR__."/../views/sign_up.views.php"?>