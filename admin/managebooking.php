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
                    <button type="button" class="btn btn-lg btn-success"><a href="addBooking.php" class="text-white">Add Booking</a></button>
                    <button type="button" class="btn btn-lg btn-success"><a href="managebooking.php" class="text-white">Manage Booking</a></button>
                </div>
                <div>
                    <h3 class="text-center text-muted">Manage Booking</h3>
                    <div class="mx-2">
                        <div class="table-responsive text-center mx-4">
                            <?php
                        $sql= "SELECT * FROM carbooking";
                        $stmt= $conn->prepare($sql);
                         $stmt->execute();
                  
                           ?>
                             <table class="table table-border">
                                <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                    <th>Vehicle</th>
                                    <th>From Date</th>
                                    <th>To Date</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Posting Date</th>
                                </tr>
                                <?php
                                 $result= mysqli_stmt_get_result($stmt);
                                 $num= mysqli_num_rows($result);
                                 if($num > 0){
                                      while($rows=mysqli_fetch_assoc($result)){?>
                                        <tr>
                                        <td><?php echo $rows['id']?></td>    
                                        <td><?php echo $rows['name']?></td>
                                        <td><?php echo $rows['vehicle']?></td>
                                        <td><?php echo $rows['from_date']?></td>
                                        <td><?php echo $rows['to_date']?></td>
                                        <td><?php echo $rows['message']?></td>
                                        <td><?php echo $rows['status']?></td>
                                        <td><a href="create/delete.php?action=deleted&id=<?php echo $rows['id']?>">Delete</a></td>
                            
                                        
                                    </tr>
                                    <?php
                                    }
 
                                 }else{
                                     header('location:managetopic.php?error=norecord');
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
<?php include ('./create/includes/footer.php');
?>