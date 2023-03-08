<?php
include ('./includes/connect.php') ;
include ('./admin/create/location.php');
include('./includes/header.php');
include('./includes/nav.php');



?>


    
    <div class="container-fluid">
    <div class="row">
  <div class="col-md-4   admin" >
          <div class="text-left  p-2 my-4 ">
              <a href="./managebooking.php" class="text-white">Manage Booking</a>
          </div>
          <div class="text-left  p-2 my-4">
              <a href="./customerLocation.php" class="text-white">Manage Car Location</a>
          </div>
      </div>
            
            <div class="col-md-8">
                <div class="my-4 mx-4">
                    <button type="button" class="btn btn-lg btn-success"><a href="AddLocation.php" class="text-white">Add Location</a></button>
                    <button type="button" class="btn btn-lg btn-success"><a href="./customerLocation.php" class="text-white">Manage Car Location</a></button>
                </div>
                <div>
                    <h3 class="text-center text-muted">Manage Car Location</h3>
                    <div class="mx-2">
                    <form method="POST" action="AddLocation.php" class="form-group">
                 
<div>
  <label for="vehicle">Vehicle</label>
  <p class="my-3"><input type="text" id="vehicle" name='vehicle' class="form-control"></p>
</div>
<div >
  <label for="customer_name">Customer Name</label>
  <p class="my-3"><input type="text" id="customer_name" name='customer_name' class="form-control"></p>
</div>
<div >
  <label for="booking_date">Booking Date</label>
  <p class="my-3"><input type="date" id="booking_date" name='booking_date'class="form-control" ></p>
</div>
<div >
  <label for="return_date">Return Date</label>
  <p class="my-3"><input type="date" id="return_date" name='return_date' class="form-control"></p>
</div>
<div >
  <label for="action">Action</label>
  <p class="my-3"><input type="text" id="action" name='action' class="form-control"></p>
</div>

  <div class="text-center py-5" >
  <button class="btn btn-success btn-md" type="submit" name="submit">Add Location</button>
   </div>
</form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('./includes/footer.php');?>