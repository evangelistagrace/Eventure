<?php
require 'config.php';

$errors = array();

if(isset($_POST['register'])){
    $userName = mysqli_real_escape_string($db, $_POST['userName']);
    $userEmail = mysqli_real_escape_string($db, $_POST['userEmail']);
    $userPassword1 = mysqli_real_escape_string($db, $_POST['userPassword1']);
    $userPassword2 = mysqli_real_escape_string($db, $_POST['userPassword2']);

    if(empty($userName)){
       array_push($errors, "Username is required"); 
    }
    if(empty($userEmail)){
        array_push($errors, "E-mail is required"); 
     }
     if(empty($userPassword1)){
        array_push($errors, "Password is required"); 
     }
     if(empty($userPassword2)){
        array_push($errors, "Password confirmation is required"); 
     }

//  check if there's existing user in the database
        $query = "SELECT * FROM users WHERE userEmail ='$userEmail' LIMIT 1";
        $result = mysqli_query($db, $query);
        $user = mysqli_fetch_assoc($result);

        if($user){
            if($user['userEmail'] === $user['userEmail']){
                array_push($errors, "Email already taken");
            }
        }

// //check if passwords match
        if($userPassword1!=$userPassword2){
         array_push($errors, "Passwords do not match");

        }

     if(count($errors)==0){
            $userPassword  = md5($userPassword1); //encrypt password

            //insert data into user table
$query = "INSERT INTO users (userName, userEmail, userPassword) VALUES ('$userName', '$userEmail', '$userPassword')";
mysqli_query($db, $query);
        
        }
}

?>