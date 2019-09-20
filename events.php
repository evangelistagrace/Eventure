<?php

require "config.php";

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
    <title>Eventure - Events</title>
</head>

<body>
    <?php include 'navbarSmall.php' ?>
    <?php include 'navbar-Events.php' ?>


    <!--Content-->
    <section>
        <div class="section-title text-center">Browse Events</div>
        <!-- select events table -->
        <?php $results = mysqli_query($db, "SELECT * FROM events ") ?>

        <!-- first row -->
        <div class="row">
            <?php while ($row = mysqli_fetch_array($results)) { ?>
            <div class="col mt-4">
                <div class="event card" style="min-width: 18rem;">
                    <img src="<?php echo $row['eventImage']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['eventName']; ?></h5>
                        <?php $date = strtotime($row['eventDate']) ?>
                        <span class="badge badge-success"><?php echo date('d/m/y',$date) ?></span><span
                            class="badge badge-info ml-2"><?php echo $row['eventCategory'] ?></span>
                        <p class="card-text mt-2"><?php echo $row['eventDesc']?></p>
                        <?php $eventid = $row['eventID']; $eventTicketPrice = $row['eventTicketPrice'] ?>
                        <form action="purchase.php" method="get">
                            <input type="hidden" name="ticketPrice" value="<?php echo $eventTicketPrice?>">
                            <button type="submit" name="eventid" value="<?php echo $eventid?>"
                                class="btn btn-primary">GET TICKETS</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

    </section>

    <?php include 'footer.php' ?>


</body>

</html>