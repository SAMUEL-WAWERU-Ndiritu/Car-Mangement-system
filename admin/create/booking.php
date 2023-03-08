<?php
require_once 'connect.php';
if(isset($_POST['submit'])){
    $name= trim($_POST['name']);
    $vehicle = trim($_POST['vehicle']);
    $from_date= trim($_POST['from_date']);
    $to_date = trim($_POST['to_date']);
    $message= trim($_POST['message']);
    $status = trim($_POST['status']);
   

    if(empty($name) || empty($vehicle)|| empty($from_date)|| empty($to_date)|| empty($message)|| empty($status)){
        header('location:addBooking.php?error=emptyfield');
        exit();
    }else{
        $sql='INSERT INTO carbooking(name,vehicle,from_date,to_date,message,status)VALUES(?,?,?,?,?,?)';
        $stmt= $conn->prepare($sql);
        $stmt->bind_param('ssssss',$name,$vehicle,$from_date,$to_date,$message,$status);
        $stmt->execute();
        header('location:addBooking.php?BookingAddedSuccessfuly');
        exit();
    }
}




?>