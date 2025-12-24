<?php 

if(isset($_POST['sub_log']) && $_SERVER['REQUEST_METHOD']==='POST'){
    

    $pass=$_POST['password']?? '';
    $email= $_POST['email']?? '';
    
    if(empty($email)||empty($pass)){
        echo "veuillez remplir tous les champs !!";
    } else {
        $sql="SELECT id ,name, email , password FROM users WHERE email=?";
    
        $stmt=mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($stmt,"s",$email);
        mysqli_stmt_execute($stmt);    
        $result=mysqli_stmt_get_result($stmt);

        if($user=mysqli_fetch_assoc($result)){
            if(password_verify($pass,$user['password'])){
                session_regenerate_id(true);
                $_SESSION['user_id']=$user['id'];
                $_SESSION['username']=$user['name'];

                header("location: home.php");
                exit;
            } else {
                echo "mots de pass incorrect !!";
            }
        }else{
            echo "utilisateur introuvable !!!";
        }
    }
}
?>

<?php require_once __DIR__."/../views/login.views.php"?>