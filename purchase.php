<?php

require "payment-process.php";

$eventid = $_GET['eventid'];
$ticketPrice= $_GET['ticketPrice'];


//prevent user from accessing index.php before they log in
if(!isset($_SESSION['userEmail'])){
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
//logout user session
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['userId']); 
    unset($_SESSION['userEmail']); 
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php' ?>
    <title>Eventure</title>
</head>

<body>
    <?php include 'navbarSmall.php' ?>
    <?php include 'navbar-Events.php' ?>


    <!--Content-->
    <section>
        <?php $results = mysqli_query($db, "SELECT * FROM events WHERE eventID = $eventid ") ?>
        <div class="row">
            <div class="col">
                <?php while ($row = mysqli_fetch_array($results)) { ?>
                <div class="purchase form-container">
                    <div class="img-container">
                        <img src="<?php echo $row['eventImage']; ?>" alt="">
                        <h1 class="text-center"><?php echo $row['eventName']; ?></h1>
                    </div>
                    <div class="row mt-5">
                        <div class="col-8">
                            <?php if($ticketPrice == 0): ?>
                            <form class="purchase-form" action="purchase.php" method="post">

                                <div class="form-group">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" class="form-control" name="fullName" required>
                                    <!-- hidden eventid input -->
                                    <input type="hidden" name="eventID" value="<?php echo $eventid ?>">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="ticketQty">Tickets</label>
                                            <select name="ticketQty" id="ticketQty">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                       
                                    </div>

                                </div>

                                <div class="form-group">
                                        <button class="btn btn-primary" name="checkout-free" type="submit">Checkout</button>
                                </div>
                            </form>
                            <?php else: ?>
                            <form class="purchase-form" action="payment.php" method="get">
                                <div class="form-group">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" class="form-control" name="fullName" required>
                                </div>
                                
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="ticketQty">Tickets</label>
                                            <select name="ticketQty" id="ticketQty">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        
                                    </div>

                                </div>

                                <div class="form-group">
                                    <form action="payment.php" method="get">
                                        <button type="submit" name="eventid" value="<?php echo $row['eventID']?>"
                                            class="btn btn-primary">Checkout</button>
                                    </form>
                                </div>
                            </form>
                            <?php endif; ?>

                        </div>
                        <div class="col-4">
                            <h5 class="text-center">Description</h5>
                            <p class="text-justify"><?php echo $row['eventDesc']?></p>

                            <h5 class="text-center">Date</h5>
                            <?php $date = strtotime($row['eventDate']) ?>
                            <p class="text-center"><?php echo date('d M Y',$date) ?></p>

                            <h5 class="text-center">Location</h5>
                            <p><?php echo $row['eventAddress']?></p>

                            <h5 class="text-center">Ticket Price</h5>
                            <?php 
                            if ($row['eventTicketPrice'] == 0)
                                $ticketPrice = "FREE";
                            else
                                $ticketPrice = "RM ".$row['eventTicketPrice'];
                            
                            ?>
                            <p class="text-center"><?php echo $ticketPrice ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>

    </section>

    <?php include 'footer.php' ?>

</body>

</html>