
<?php
require_once 'connect.php';
if(isset($_POST['submit'])){
    $title= trim($_POST['title']);
    $brand = trim($_POST['brand']);
    $image =trim($_POST['image']);
    $fuel= trim($_POST['fuel']);
    $model_year= trim($_POST['model_year']);


    if(empty($title) || empty($brand)|| empty($image) || empty($fuel)|| empty($model_year) ){
        header('location:addVehicle.php?error=emptyfield');
        exit();
    }else{
        $sql='INSERT INTO vehicles(title,brand,image,fuel,model_year)VALUES(?,?,?,?,?)';
        $stmt= $conn->prepare($sql);
        $stmt->bind_param('sssss',$title,$brand,$image,$fuel,$model_year);
        $stmt->execute();
        header('location:manageVehicles.php?VehicleAddedSuccessfuly');
        exit();
    }
}



?>