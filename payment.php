<?php

require "config.php";

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
    <div class="section-title left">Payment</div>
    <div class="row">
    <div class="col">
    <div class="payment form-container">

    <p>Pay with debit or credit card.
        <br>
        We don't share your financial details with the merchant.
    </p>

    <form action="" class="payment-form">
        <div class="form-group">
        <select class="selectpicker show-tick" data-style="btn-primary" title="Country">
        <option>Mustard</option>
        <option>Ketchup</option>
        <option>Barbecue</option>
        </select>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Card Number">
        </div>
    </form>

    </div>
    </div>
    </div>

    </section>

    <?php include 'footer.php' ?>

</body>

</html>