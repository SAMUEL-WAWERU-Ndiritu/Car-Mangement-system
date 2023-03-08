<?php
$host = 'localhost';
$root = 'root';
$password= '';
$dbname="motor_company";
$conn = new mysqli($host,$root,$password,$dbname);
if(mysqli_connect_error()){
    die('Connection Failed'.$conn->mysqli_connect_error());
}

?>