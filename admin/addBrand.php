<?php

include ('./create/connect.php') ;
include ('./create/brand.php');
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
                    <button type="button" class="btn btn-lg btn-success"><a href="addBrand.php" class="text-white">Add Brand</a></button>
                    <button type="button" class="btn btn-lg btn-success"><a href="manageBrand.php" class="text-white">Manage Brand</a></button>
                </div>
                <div>
                    <h3 class="text-center text-muted">Add Brand</h3>
                    <div class="mx-2">
                    <form method="POST" action="addBrand.php" class="form-group">
                 
<div>
  <label for="brand_name">Brand Name</label>
  <p class="my-3"><input type="text" name='brand_name' class="form-control"></p>
</div>
<div>
  <label for="date">Creation Date</label>
  <p class="my-3"><input type="date" name="date" class="form-control"></p>
</div>
  <div class="text-center py-5" >
  <button class="btn btn-success btn-md" type="submit" name="submit">Add Brand</button>
   </div>
</form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include ('./create/includes/footer.php');
?>