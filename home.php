
<?php

require 'config.php';


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
    <title>Eventure - Home</title>
</head>

<body>
    <?php include 'navbarSmall.php' ?>

    <header>
        <?php include 'navbar-Home.php' ?>

        
        <div class="center-container">

            <div class="header-text">
                Don't miss out on your
                <br>
                favorite events!
            </div>
            <div class="input-group md-form form-sm form-2 pl-0 search-bar" style="width:400px">
                <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search events"
                    aria-label="Search">
                <div class="input-group-append">
                    <span class="input-group-text red lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
                            aria-hidden="true"></i></span>
                </div>
            </div>

            <div class="location">
                <i class="fas fa-map-marker-alt"></i><a href="#">Cyberjaya</a>
                <span><a href="#">Change location?</a></span>
            </div>
        </div>
    </header>

    <!--Content-->
    <section>
        <div class="section-title left">Upcoming</div>
        <div class="inline">
        <?php $results = mysqli_query($db, "SELECT * FROM events LIMIT 3") ?>
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
                        <?php $eventid = $row['eventID'] ?>
                        <form action="purchase.php" method="get">
                            <button type="submit" name="eventid" value="<?php echo $row['eventID']?>"
                                class="btn btn-primary">GET TICKETS</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>

    <section>
        <div class="section-title right">Explore Events</div>
        <div class="section-body">
            <!-- browse event type -->
            <div class="scrolling-wrapper">

                <div class="card card-1">
                </div>
                <div class="card card-2">
                </div>
                <div class="card card-3">
                </div>
                <div class="card card-4">
                </div>
                <div class="card card-5">
                </div>
                <div class="card card-6">
                </div>
                <div class="card card-7">
                </div>
            </div>
        </div>

    </section>

    <!--Explore events-->
    <section>
        <div class="section-title left">Pick An Event For You</div>
        <div class="section-body">
            <div class="btn-group">I am looking for a </div>
            <div class="btn-group">
                <!-- Event category -->
                <button type="button" class="btn btn-info btn-lg dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Pick a category
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Concert</a>
                    <a class="dropdown-item" href="#">Science & Technology</a>
                    <a class="dropdown-item" href="#">Education</a>
                    <a class="dropdown-item" href="#">Seminar</a>
                    <a class="dropdown-item" href="#">Workshop</a>
                    <a class="dropdown-item" href="#">Arts</a>
                    <a class="dropdown-item" href="#">Sports</a>
                </div>
            </div>
            <div class="btn-group">event in</div>

            <div class="btn-group">
                <!-- Event location -->
                <button type="button" class="btn btn-info btn-lg dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Pick a location
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">George Town</a>
                    <a class="dropdown-item" href="#">Kuala Lumpur</a>
                    <a class="dropdown-item" href="#">Ipoh</a>
                    <a class="dropdown-item" href="#">Kuching</a>
                    <a class="dropdown-item" href="#">Johor Bahru</a>
                    <a class="dropdown-item" href="#">Kota Kinabalu</a>
                    <a class="dropdown-item" href="#">Shah Alam</a>
                    <a class="dropdown-item" href="#">Melaka</a>
                    <a class="dropdown-item" href="#">Alor Setar</a>
                    <a class="dropdown-item" href="#">Miri</a>
                    <a class="dropdown-item" href="#">Petaling Jaya</a>
                    <a class="dropdown-item" href="#">Kuala Terengganu</a>
                    <a class="dropdown-item" href="#">Iskandar Puteri</a>
                    <a class="dropdown-item" href="#">Seberang Perai</a>
                </div>
            </div>

            <div class="btn-group">on</div>

            <div class="btn-group">
                <!-- Event date -->
                <button type="button" class="btn btn-info btn-lg dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Pick a date
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Today</a>
                    <a class="dropdown-item" href="#">This Week</a>
                    <a class="dropdown-item" href="#">Next Week</a>
                    <a class="dropdown-item" href="#">This Month</a>
                    <a class="dropdown-item" href="#">Next Month</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Pick a Date</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php' ?>

</body>

</html>