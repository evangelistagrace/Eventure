<?php

require "config.php";

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
        <div class="section-title left">Events</div>
        <!-- select events table -->
        <?php $results = mysqli_query($db, "SELECT * FROM events ") ?>

        <!-- first row -->
        <div class="row">
        <?php while ($row = mysqli_fetch_array($results)) { ?>
            <div class="col">
                <div class="event card">
                    <img src="<?php echo $row['eventImage']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['eventName']; ?></h5>
                        <?php $date = strtotime($row['eventDate']) ?>
                        <span class="badge badge-success"><?php echo date('d/m/y',$date) ?></span><span class="badge badge-info ml-2"><?php echo $row['eventCategory'] ?></span>
                        <p class="card-text mt-2">This race will be organized and promoted as a charity run, where funds will
                            be raised from the participating runners, and donated to selected charities identified by
                            the organizing committee.</p>
                        <a href="#" class="btn btn-primary">GET TICKETS</a>
                    </div>
                </div>
            </div>
            <?php } ?>

            <!-- <div class="col">
                <div class="event card">
                    <img src="img/events/career-fair.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mega Career Fair & Post-Graduate Education Fair 2020</h5>
                        <p class="card-text">We are bringing some of the country's best employers and top universities
                            and colleges over to bridge the gap between you and your future employer under one roof!
                        </p>
                        <a href="#" class="btn btn-primary">GET TICKETS</a>
                    </div>
                </div>
            </div> -->

            <div class="col">
                <div class="event card">
                    <img src="img/events/data-science-show.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">BIGIT 2019, THE 7th Annual Data Science Show</h5>
                        <p class="card-text">BIGIT2019, the 7th Annual Data Science Show

                            In the last 2-3 years, we witnessed big data analytics steadily knocking down inflated
                            expectations and disillusionments to ultimately begin their journey toward high-value,
                            mainstream adoption.

                            The BIGIT2019 theme - The Rise of the Data-Driven Organization - aptly describes the current
                            state of big data adoption in Malaysia. We are beginning to discover many impactful advanced
                            analytics- and AI-driven products and solutions that are catalysts to organizational
                            transformation.

                            Yes, we are referring to increased revenues, higher efficiencies and reduced costs.

                            Come join us for BIGIT2019 to learn how advanced analytics is exploited for gains in key
                            sectors. Listen to how AI will find the next oil well. Be speechless by how credit card
                            companies exploit AI to brainwash you into parting with your money. Be reassured by how AI
                            will produce more jobs than ever.</p>
                        <a href="#" class="btn btn-primary">GET TICKETS</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- second row -->
        <div class="row">
            <div class="col">
                <div class="event card">
                    <img src="img/events/dance-workshop.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Contemporary Dance Workshop</h5>
                        <p class="card-text">Come experience diverse dance and body form movements including - contemporary & modern dance, hip hop and martial arts - in this special one day workshop with Sharath CK. </p>
                        <a href="#" class="btn btn-primary">GET TICKETS</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="event card">
                    <img src="img/events/kl-race.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kuala Lumpur 24 Hour Race 2019</h5>
                        <p class="card-text">There is no better place to be this fall. Join in for hot music, mouth-watering food, games and entertainment, all the while taking part in fighting human trafficking.

On November 23, 2019, hundreds of high school students around Malaysia gather for 24 hours on a mission to end slavery.

All you have to do is get a team of 8 to run for 24 hours. Easy!
                        </p>
                        <a href="#" class="btn btn-primary">GET TICKETS</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="event card">
                    <img src="img/events/guitar-class.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Performance Clinic with Marty Friedman</h5>
                        <p class="card-text">Guitar.com, in partnership with Swee Lee and Jackson Guitars, is proud to bring Marty Friedman to Kuala Lumpur for a free performance clinic. Performing live on stage at the Wisma MCA, Marty will demonstrate why he is considered one of the greatest guitarists of all time. We expect an overwhelming response to this event – so be sure to register early!</p>
                        <a href="#" class="btn btn-primary">GET TICKETS</a>
                    </div>
                </div>
            </div>
        </div>

         <!-- third row -->
         <div class="row">
            <div class="col">
                <div class="event card">
                    <img src="img/events/camera-workshop.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Photography Essentials Workshop</h5>
                        <p class="card-text">Take your photography skills to the next level in this free introductory
                            workshop.</p>
                        <a href="#" class="btn btn-primary">GET TICKETS</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="event card">
                    <img src="img/events/paint-workshop.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Painting In Your Own Style</h5>
                        <p class="card-text">This workshop teaches you how to own your unique style and paint it your
                            way.
                            Early birds get a 30% discount. Limited seats available, grab your tickets today!</p>
                        <a href="#" class="btn btn-primary">GET TICKETS</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="event card">
                    <img src="img/events/music-fest.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Indie Music Fest</h5>
                        <p class="card-text">Good Vibes Festival returns this 20 - 21 July 2019 at The Ranch at Gohtong
                            Jaya, Genting Highlands with Rae Sremmurd, 6lack, Anna Lunoe and many more.</p>
                        <a href="#" class="btn btn-primary">GET TICKETS</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <?php include 'footer.php' ?>


</body>

</html>