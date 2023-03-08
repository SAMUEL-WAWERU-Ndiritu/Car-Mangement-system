<?php
require_once 'connect.php';
$errors = array();
if(isset($_POST['submit'])){
    $username= trim($_POST['username']);
    $email= trim($_POST['email']);
    $password = trim($_POST['password']);
    $con_password= trim($_POST['con_password']);
    $role= trim($_POST['role']);
    if(empty($username) || empty($email) || empty($password) || empty($con_password) || empty($role)){
        array_push($errors,'Kindly input the field');
        header('location:register.php?error=emptyfield');
        exit();
    }elseif(preg_match('/*[a-zA-Z0-9]*/',$username)){
       array_push($errors,'Yours words match are not acceptable');
        header('location:register.php?error=checkyourmatch');
        exit();
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        array_push($errors,'Your email is not acceptable');
        header('location:register.php?error=checkyouremail');
        exit();
    }elseif($password !== $con_password){
        array_push($errors,"Password don't match");
        header("location:register.php?error=passworddon'tmatch");
        exit();
    }else{
        
        $sql= "INSERT INTO users(username,email,password, role)VALUES(?,?,?,?)";
        $stmt= $conn->prepare($sql);
        $hash_pass= password_hash($password,PASSWORD_DEFAULT);
        $stmt->bind_param('ssss',$username,$email,$hash_pass,$role);
        $stmt->execute();
        header('location:adduser.php?UserAddedSuccessfuly');;
        $msg= 'You have succesufully registered';
        $color= 'success';

    }
}

?>