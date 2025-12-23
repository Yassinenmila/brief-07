<?php 

if(isset($_POST['submit'])){
    $username= $_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $conf=$_POST['conf'];

    if($password!==$conf){
        $message="mots de pass incorrect !!!";
        exit;
    }

    $sql="SELECT * FROM users WHERE name= ?";
    $stmt=mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt,"s",$userame);
    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result)>0){
        $message="nom d'utilisateur deja utiliser.";
        exit;
    }

    $pwd= password_hash($password,PASSWORD_DEFAULT);

    $sql="INSERT INTO users (name ,email,password) VALUES (?,?,?)";
    $stmt=mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"sss",$username,$email,$pwd);

    if(mysqli_stmt_execute($stmt)){
        $message="inscription reussit !!";
    }else{
        $message="ERROR :". mysql_error($conn);
    }

    header("location: login.php");
    exit;
}

?>

<?php require_once __DIR__."/../views/sign_up.views.php"?>