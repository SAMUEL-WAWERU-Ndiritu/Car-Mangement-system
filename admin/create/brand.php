
<?php
require_once 'connect.php';
if(isset($_POST['submit'])){
    $brand_name= trim($_POST['brand_name']);
    $date = trim($_POST['date']);
   


    if(empty($brand_name) || empty($date) ){
        header('location:addBrand.php?error=emptyfield');
        exit();
    }else{
        $sql='INSERT INTO brand(brand_name,date)VALUES(?,?)';
        $stmt= $conn->prepare($sql);
        $stmt->bind_param('ss',$brand_name,$date);
        $stmt->execute();
        header('location:manageBrand.php?VehicleAddedSuccessfuly');
        exit();
    }
}



?>