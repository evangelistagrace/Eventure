<?php
require 'config.php';

$errors = array();

$userEmail = $_SESSION['userEmail'];

//check purchase form for free payment and add to orders
if(isset($_POST['checkout-free'])){
    $fullName = mysqli_real_escape_string($db, $_POST['fullName']);
    // $email = mysqli_real_escape_string($db, $_POST['email']);
    $ticketQty = mysqli_real_escape_string($db, $_POST['ticketQty']);
    $eventID = mysqli_real_escape_string($db, $_POST['eventID']);


    if(isset($_SESSION['userEmail'])){
        $query = "INSERT INTO orders (userEmail, userName, eventID, ticketQty) VALUES ('$userEmail', '$fullName', '$eventID', '$ticketQty')";

    mysqli_query($db, $query);

    header('location: myTickets.php');
    }
}

//check purchase form for orders with payment and add to orders
if(isset($_POST['checkout-payed'])){
    $fullName = mysqli_real_escape_string($db, $_POST['fullName']);
    // $email = mysqli_real_escape_string($db, $_POST['email']);
    $ticketQty = mysqli_real_escape_string($db, $_POST['ticketQty']);
    $eventID = mysqli_real_escape_string($db, $_POST['eventID']);


    if(isset($_SESSION['userEmail'])){
        $query = "INSERT INTO orders (userEmail, userName, eventID, ticketQty) VALUES ('$userEmail', '$fullName', '$eventID', '$ticketQty')";

    mysqli_query($db, $query);

    header('location: myTickets.php');
    }
}


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

    $fullName = mysqli_real_escape_string($db, $_POST['fullName']);
    $ticketQty = mysqli_real_escape_string($db, $_POST['ticketQty']);
    $eventID = mysqli_real_escape_string($db, $_POST['eventID']);

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

        $query2 = "INSERT INTO orders (userEmail, fullName, eventID, ticketQty) VALUES ('yy', 'yy', 'yy', 'yy')";

        mysqli_query($db, $query2);
    
        header('location: myTickets.php');
    }

}

?>