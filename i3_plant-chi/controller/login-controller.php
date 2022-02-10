<?php 
    include("models/User.php");
    $msg="";

    if(isset($_POST["email"], $_POST["password"])){
        $connexionUser= new User();
        $user = $connexionUser->verify(htmlspecialchars($_POST['email']), htmlspecialchars($_POST['password']));
        
        if($user != false){
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["username"] = $user["firstname"];
            header("Location:?section=choose-a-plant");
            // var_dump($user);
        } else {
            session_destroy();
            //header("Location:?section=wrong-credentials");
            $msg = "Invalid email or password";
            var_dump($msg);
        }
    }
    
    include("views/page/login.php");
?>