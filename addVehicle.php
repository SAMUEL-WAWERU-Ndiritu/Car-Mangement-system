<?php
include ('./includes/connect.php') ;
include ('./admin/create/vehicle.php');
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
      
<div class="col-md-8 m-auto">
<div class="my-4 mx-4">
<button type="button" class="btn btn-lg btn-success"><a href="addvehicle.php" class="text-white">Add Vehicles</a></button>
<button type="button" class="btn btn-lg btn-success"><a href="./manageVehicles.php" class="text-white">Manage vehicles</a></button>
</div>
<div>
<h3 class="text-center text-muted">Add Vehicles</h3>
<div class="mx-2">
<form method="POST" action="addpost.php" class="form-group">
    
<div>
  <label for="title">Vehicle Title</label>
  <p class="my-3"><input type="text" name='title' class="form-control"></p>
</div>
<div>
  <label for="body">Brand</label>
  <p class="my-3"><input type="text" name="brand" class="form-control"></p>
</div>
<div>
  <label for="image">Image of the vehicle</label>
  <p class="my-3"><input type="file" name="image" class="form-control"></p>
</div>
<div>
  <label for="image">Fuel</label>
  <p class="my-3"><input type="file" name="fuel" class="form-control"></p>
</div>
<div>
  <label for="price">Price</label>
  <p class="my-3"><input type="text" name="price" class="form-control"></p>
</div>
<div>
  <label for="image">Model Year</label>
  <p class="my-3"><input type="text" name="model_year" class="form-control"></p>
</div>
  <div class="text-center my-5">
  <button class="btn btn-success btn-md" type="submit" name="submit">Add Vehicle</button>
   </div>
</form> 
</div>
</div>
</div>
</div>
</div>
     <?php include('./includes/footer.php');?>