<?php
include ('./create/connect.php') ;
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
                    <h3 class="text-center text-muted">Manage Brand</h3>
                    <div class="mx-2">
                        <div class="table-responsive text-center mx-4">
                            <table class="table table-border">
                            <?php
                        $sql= "SELECT * FROM brand";
                        $stmt=$conn->prepare($sql);
                         $stmt->execute();
                      
                           ?>
                                <tr>
                                    <th>SN</th>
                                    <th>Brand Name</th>
                                    <th>Creation Date</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                                 $result= mysqli_stmt_get_result($stmt);
                                 $num= mysqli_num_rows($result);
                                 if($num > 0){
                                      while($rows=mysqli_fetch_assoc($result)){?>
                                        <tr>
                                        <td><?php echo $rows['id']?></td>
                                        <td><?php echo $rows['brand_name']?></td>
                                        <td><?php echo $rows['date']?></td>
                                        <td><a href="create/delete.php?action=deleted&id=<?php echo $rows['id']?>">Delete</a></td>
        
                                    </tr>
                                    <?php
                                    }
 
                                 }else{
                                     header('location:ManageBrand.php?error=norecord');
                                     exit();
                                 }
                                 
                                ?>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
  include ('./create/includes/footer.php');
    ?>
    
    
  