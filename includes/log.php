<?php
include 'connect.php' ;
$username= "";
$password = "";
$errors= array();
if (isset($_POST['login'])){
    $username = $_POST["username"];
    $password = $_POST["password_1"]; 
   


#ensure the filled are filled properly
if(empty($username)){
    array_push($errors, "username is required");
}

if(empty($password)){
   array_push($errors, "password is required");
} 

if(count($errors)==0){
    $password = md5($password);//encrpt password 
    $query = "SELECT * FROM users WHERE username= '$username' AND password= '$password'"; 
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)==1){
        //log user in
        header('location:home.php');
    }else{
        array_push($errors,"wrong username/password combination");
        header('location: login.php');
    }
}
}