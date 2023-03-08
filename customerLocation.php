<?php
include ('./includes/connect.php') ;
include('./includes/header.php');
include('./includes/nav.php');
include ('./admin/create/location.php');
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
                    <button type="button" class="btn btn-lg btn-success"><a href="./AddLocation.php" class="text-white">Add Location</a></button>
                    <button type="button" class="btn btn-lg btn-success"><a href="customerLocation.php" class="text-white">Manage Car Location</a></button>
                </div>
                <div>
                    <h3 class="text-center text-muted">Manage Car Location</h3>
                    <div class="mx-2">
                        <div class="table-responsive text-center mx-4">
                            <?php
                        $sql= "SELECT * FROM location";
                        $stmt= $conn->prepare($sql);
                        $stmt->execute();
                                          
                           ?>
                             <table class="table table-border">
                                <tr>
                                    <th>SN</th>
                                    <th>Vehicle</th>
                                    <th>Customer Name</th>
                                    <th>Booking Date</th>
                                    <th>Return Date</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                                 $result= mysqli_stmt_get_result($stmt);
                                 $num= mysqli_num_rows($result);
                                 if($num > 0){
                                      while($rows=mysqli_fetch_assoc($result)){?>
                                        <tr>
                                        <td><?php echo $rows['id']?></td>    
                                        <td><?php echo $rows['vehicle']?></td>
                                        <td><?php echo $rows['customer_name']?></td>
                                        <td><?php echo $rows['booking_date']?></td>
                                        <td><?php echo $rows['return_date']?></td>
                                        <td><?php echo $rows['action']?></td>
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
    <?php include('./includes/footer.php');?>
