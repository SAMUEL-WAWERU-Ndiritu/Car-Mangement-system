

    <?php
include 'includes/connect.php';
  
    if(isset($_POST["submit"])){
    $first_name= trim($_POST['first_name']);
    $last_name= trim($_POST['last_name']);
    $email= trim($_POST['email']);
    $phone= trim($_POST['phone']);
    $subject= trim($_POST['subject']);
    


    

    if(empty($first_name) || empty($last_name) || empty($email) || empty($phone)  || empty($subject)){
        header('location:booking.php?error=emptyfields');
        
        exit();

    }else{
       
        $sql= "INSERT INTO booking(first_name,last_name,email,phone,subject)VALUES(?,?,?,?,?)";
        $stmt= $conn->prepare($sql);
        $stmt->bind_param('sssss',$first_name,$last_name,$email,$phone,$subject);
        $stmt->execute();
        header('location:payment.php?success=bookingsuccessful');
        }
       
       
        

    }


