<?php
// include ('./create/user.php');
// include ('./create/connect.php') ;
// include ('./create/includes/header.php');
// include ('./create/includes/navbar.php');
// include ('./create/includes/dashboard.php');



require_once '../rootpath.php';
include (ROOT_PATH.'/admin/create/connect.php') ;
include (ROOT_PATH.'/admin/create/includes/header.php');
include (ROOT_PATH.'/admin/create/includes/navbar.php');
include (ROOT_PATH.'/admin/create/user.php');

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
                    <button type="button" class="btn btn-lg btn-success"><a href="adduser.php" class="text-white">Add User</a></button>
                    <button type="button" class="btn btn-lg btn-success"><a href="manageuser.php" class="text-white">Manage Users</a></button>
                </div>
                <div>
                    <h3 class="text-center text-muted">Add User</h3>
                    <div class="mx-2">
                    <form method="POST" action="adduser.php" class="form-group">
                 
<div>
  <label for="username">Username</label>
  <p class="my-3"><input type="text" name='username' class="form-control"></p>
</div>
<div>
  <label for="email">Email</label>
  <p class="my-3"><input type="email" name="email" class="form-control"></p>
</div>
  <div>
  <label for="password">Password</label>
 <p class="my-3"> <input type="password" name="password" class="form-control"></p>
 </div>
  <div >
  <label for="con_password">Confirm Password</label>
 <p class="my-3"> <input type="password" name="con_password" class="form-control"></p>
  </div>  
  <div class="text-center py-5" >
  <button class="btn btn-success btn-md" type="submit" name="submit">Add User</button>
   </div>
</form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php include ('./create/includes/header.php');?>