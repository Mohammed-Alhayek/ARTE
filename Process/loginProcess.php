<?php
include("../Config/db_config.php");

if(!empty($_POST)){
    $error="";

    if(empty($_POST['username']) || empty($_POST['password'])){
        $error.=" username or password can't be empty";
        header("location:../adminLogin.php?error=$error");
    }
    else{
        $username= strtolower($_POST['username']);
        $password= $_POST['password'];

        $user_query= "SELECT * FROM administrator WHERE password = '$password' AND username = '$username'";
        if(mysqli_query($connection, $user_query)){
            $user_response= mysqli_query($connection, $user_query);
            if(mysqli_num_rows($user_response)==1){
                $data = mysqli_fetch_assoc($user_response);
                session_start();
                $_SESSION['username'] = $data['username'];
                $_SESSION['password'] = $data['password'];
                header("location:../feedbackView.php");
            }
            else{
                $error.= "username or password invalid";
                header("location:../adminLogin.php?error=".$error);
            }
            }
            else{
                echo "Error".$user_query.mysqli_error($connection);
            }
        }
}
?>