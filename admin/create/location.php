
<?php
require_once 'connect.php';
if(isset($_POST['submit'])){
    $vehicle= trim($_POST['vehicle']);
    $customer_name = trim($_POST['customer_name']);
    $booking_date= trim($_POST['booking_date']);
    $return_date = trim($_POST['return_date']);
    $action= trim($_POST['action']);
   
   


    if(empty($vehicle) || empty($customer_name)|| empty($booking_date)||empty($return_date)|| empty($action) ){
        header('location:AddLocation.php?error=emptyfield');
        exit();
    }else{
        $sql='INSERT INTO location(vehicle,customer_name,booking_date,return_date,action)VALUES(?,?,?,?,?)';
        $stmt= $conn->prepare($sql);
        $stmt->bind_param('sssss',$vehicle,$customer_name,$booking_date,$return_date,$action);
        $stmt->execute();
        header('location:manageLocation.php?LocationAddedSuccessfuly');
        exit();
    }
}


?>