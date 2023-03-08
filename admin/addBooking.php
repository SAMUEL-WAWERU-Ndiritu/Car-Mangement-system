
<?php

include ('./create/connect.php') ;
include ('./create/booking.php');
include ('./create/includes/header.php');
include ('./create/includes/navbar.php');

?>



<div class="container-fluid">
        <div class="row">
        <div class="col-md-4   admin" >
                <div class="text-left  p-2 my-4 ">
                    <a href="managebooking.php" class="text-white">Manage Booking</a>
                </div >
                <div class="text-left  p-2 my-4">
                    <a href="manageuser.php" class="text-white">Manage user</a>
                </div>
                <div class="text-left  p-2 my-4">
                    <a href="manageBrand.php" class="text-white">Manage Brand</a>
                </div>
                <div class="text-left  p-2 my-4">
                    <a href="manageVehicles.php" class="text-white">Manage Vehicles</a>
                </div>
                <div class="text-left  p-2 my-4">
                    <a href="customerLocation.php" class="text-white">Manage Car Location</a>
                </div>
            </div>
            
            <div class="col-md-8 m-auto">
                <div class="my-4 mx-4">
                    <button type="button" class="btn btn-lg btn-success"><a href="addBooking.php" class="text-white">Add Booking</a></button>
                    <button type="button" class="btn btn-lg btn-success"><a href="managebooking.php" class="text-white">Manage Booking</a></button>
                </div>
                <div>
                    <h3 class="text-center text-muted">Add Booking</h3>
                    <div class="mx-2">
                    <form method="POST" action="addBooking.php" class="form-group">

<div >
  <label for="name">Name</label>
  <p class="my-3"><input type="text" id="name" name='name' class="form-control"></p>
</div>
<div >
  <label for="vehicle">Vehicle</label>
  <p class="my-3"><input type="text" id="vehicle" name='vehicle' class="form-control"></p>
</div>
<div >
  <label for="from_date">From Date</label>
  <p class="my-3"><input type="date" id="from_date" name='from_date' class="form-control"></p>
</div>

<div>
  <label for="to_date">To Date</label>
  <p class="my-3"><input type="date" id="to_date" name='to_date' class="form-control"></p>
</div>

<div >
  <label for="message">Message</label>
  <textarea name='message' id="message" cols="10" rows="3"class="form-control"></textarea>
</div>
<div >
  <label for="status">Status</label>
  <p class="my-3"><input type="text" id="status" name='status'class="form-control"></p>
</div>
  <div class="text-center py-5">
  <button class="btn btn-success btn-md" type="submit" name="submit">Book</button>
   </div>
</form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include ('./create/includes/footer.php');