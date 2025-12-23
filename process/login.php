<?php 

if(isset($_POST['submit'])){
    

    $pass=$_POST['password'];
    $email= $_POST['email'];

    $stmt=mysqli_prepare($conn,$sql);
    $sql="SELECT id , email , password FROM users WHERE email=?";
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_param($stmt,"s",$email);
    
    $result=mysqli_stmt_get_result($stmt);

    if($user=mysqli_fetch_assoc($result)){
        if(password_verify($password,$user['password'])){
            session_regenerate_id(true);
            $_SESSION['user_id']=$user['id'];
            $_SESSION['username']=$user['name'];

            header("location: home.php");
            exit;
        }else{
            $message="mots de pass incorrect !!";
        }
    }else{
        $message="usilisateur introuvable !!!";
    }

}
?>

<?php require_once __DIR__."/../views/login.views.php"?>