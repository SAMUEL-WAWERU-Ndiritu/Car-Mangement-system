<?php

require_once 'connect.php';
    $sql = "DELETE FROM posts WHERE id =' ". $_GET['id']."'";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Record Delete succefully')</script>";
        echo "<script>window.location='../managepost.php'</script>";
      
        
    
    }else{
        echo "<script>alert ('Unable to delete')</script>";
    }





    $sql = "DELETE FROM topics WHERE id =' ". $_GET['id']."'";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Record Delete succefully')</script>";
        echo "<script>window.location='../managetopic.php'</script>";
      
        
    
    }else{
        echo "<script>alert ('Unable to delete')</script>";
    }
   
    $sql = "DELETE FROM users WHERE id =' ". $_GET['id']."'";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Record Delete succefully')</script>";
        echo "<script>window.location='../manageuser.php'</script>";
      
        
    
    }else{
        echo "<script>alert ('Unable to delete')</script>";
    }

 ?>