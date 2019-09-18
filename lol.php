<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php' ?>
    <title>Eventure</title>
</head>

<body>
    <?php include 'navbarSmall.php' ?>

    <header>
        <?php include 'navbarBig.php' ?>

        <!-- CONTENT -->
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

    <!--Upcoming events-->
    <section>
        <div class="section-title left">Upcoming</div>
        <div class="inline">
            <div class="card">
                <img src="img/events/camera-workshop.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Photography Essentials Workshop</h5>
                    <p class="card-text">Take your photography skills to the next level in this free introductory
                        workshop.</p>
                    <a href="#" class="btn btn-primary">GET TICKETS</a>
                </div>
            </div>

            <div class="card">
                <img src="img/events/paint-workshop.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Painting In Your Own Style</h5>
                    <p class="card-text">This workshop teaches you how to own your unique style and paint it your way.
                        Early birds get a 30% discount. Limited seats available, grab your tickets today!</p>
                    <a href="#" class="btn btn-primary">GET TICKETS</a>
                </div>
            </div>


            <div class="card">
                <img src="img/events/music-fest.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Indie Music Fest</h5>
                    <p class="card-text">Good Vibes Festival returns this 20 - 21 July 2019 at The Ranch at Gohtong
                        Jaya, Genting Highlands with Rae Sremmurd, 6lack, Anna Lunoe and many more.</p>
                    <a href="#" class="btn btn-primary">GET TICKETS</a>
                </div>
            </div>
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


    <script src="index.js"></script>
    <script src="https://kit.fontawesome.com/a256fe27cf.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


</body>

</html>