<?php

require 'config.php';

////LOGIN////
if(isset($_POST['login'])){
    //verify input
    $userEmail = mysqli_real_escape_string($db, $_POST['userEmail']);
    $userPassword = mysqli_real_escape_string($db, $_POST['userPassword']);

    // if(empty($username)){
    //     array_push($errors, "Username is required");
    // }
    // if(empty($password)){
    //     array_push($errors, "Password is required");
    // }

    // if(count($errors) == 0){
        // $password = md5($password);
        $user_check_query = "SELECT * FROM users WHERE userEmail ='$userEmail' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) == 1){ //check if there exists this user in the database already
            $_SESSION['userEmail'] = $user['userEmail'];
            $_SESSION['userId'] = $user['userId'];

            header('location: home.php');
            
        }
        else{
            array_push($errors, "Wrong email/password");
        }
    // }
}

?>