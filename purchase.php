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
        <div class="row">
            <div class="col">
                <div class="purchase form-container">
                    <div class="img-container">
                        <img src="img/events/charity-run.jpg" alt="">
                        <h1 class="text-center">Event title</h1>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <form class="purchase-form" action="">
                               <div class="form-group">
                                   <label for="fullName">Full Name</label>
                                   <input type="text" class="form-control" name="fullName">
                               </div>
                               <div class="form-group">
                                   <label for="email">Email</label>
                                   <input type="text" class="form-control" name="email">
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
                                  <div class="col">
                                  <label for="totalPrice">Total</label>
                                   <input type="text" class="form-control" name="email" placeholder="RM 0.00" disabled>
                                  </div>
                                   </div>
                                  
                               </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block">Checkout</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-4">
                            <h5 class="text-center">Event Description</h5>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla reiciendis maiores, natus sunt eaque est perferendis distinctio labore praesentium, atque omnis quaerat aliquam ducimus quibusdam officiis consequuntur? Quis, minus eos?</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <?php include 'footer.php' ?>


</body>

</html>