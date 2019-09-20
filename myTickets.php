<?php

require "config.php";

$userEmail = $_SESSION['userEmail'];

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
    <?php include 'navbar-Tickets.php' ?>


    <!--Content-->
    <section>
    <div class="section-title text-center">My Tickets</div>
      <!-- select eventid for user from orders -->
      <!-- select event name from events -->
      <?php $results = mysqli_query($db, "SELECT eventName, eventDate, eventImage, ticketQty FROM events e INNER JOIN orders o ON e.eventID = o.eventID WHERE o.userEmail = '$userEmail' "); ?>


<div class="container">
<?php while ($row = mysqli_fetch_array($results)) { ?>
        <div class="row row-margin-bottom">
            <div class="col-md-12 no-padding lib-item" data-category="view">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <img class="lib-img-show" src="<?php echo $row['eventImage'] ?>">
                        </div>
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
                            <?php echo $row['eventName']; ?>
                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
                            <?php echo $row['eventDate'] ?>
                            <br>
                            QTY:  <?php echo $row['ticketQty'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>

      <?php } ?>
</div>

      


    </section>

    <?php include 'footer.php' ?>


</body>

</html>