<?php
require 'config.php';

$errors = array();

if(isset($_POST['pay'])){

    $country = mysqli_real_escape_string($db,$_POST['country']);
    $cardNum = mysqli_real_escape_string($db,$_POST['cardNum']);
    $cardExpiry = mysqli_real_escape_string($db,$_POST['cardExpiry']);
    $cardCVV = mysqli_real_escape_string($db,$_POST['cardCVV']);
    $firstName = mysqli_real_escape_string($db,$_POST['firstName']);
    $lastName = mysqli_real_escape_string($db,$_POST['lastName']);
    $address= mysqli_real_escape_string($db,$_POST['address']);
    $mobileNum = mysqli_real_escape_string($db,$_POST['mobileNum']);
    $email = mysqli_real_escape_string($db,$_POST['email']);

    if(empty($cardNum)){
        array_push($errors, "Card number is required");
    }
    if(empty($cardExpiry)){
        array_push($errors, "Card expiry date is required");
    }
    if(empty($cardCVV)){
        array_push($errors, "Card CVV is required");
    }
    if(empty($firstName)){
        array_push($errors, "FirstName is required");
    }
    if(empty($address)){
        array_push($errors, "Address is required");
    }
    if(empty($mobileNum)){
        array_push($errors, "Mobile number is required");
    }
    if(empty($email)){
        array_push($errors, "Email is required");
    }

    if(count($errors)==0){
        $query = "INSERT INTO payments (country, cardNum, cardExpiry, cardCVV, firstName, lastName, address, mobileNum, email) VALUES ('$country', '$cardNum', '$cardExpiry', '$cardCVV', '$firstName', '$lastName', '$address', '$mobileNum', '$email')";
        
        mysqli_query($db, $query);
    }

}

?>