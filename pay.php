
    <?php
include 'includes/connect.php';
  
    if(isset($_POST["submit"])){
    $first_name= trim($_POST['first_name']);
    $last_name= trim($_POST['last_name']);
    $email= trim($_POST['email']);
    $phone= trim($_POST['phone']);
    $card_number= trim($_POST['card_number']);
    $amount= trim($_POST['amount']);
    


    

    if(empty($first_name) || empty($last_name) || empty($email) || empty($phone)  || empty($card_number) || empty($amount)){
        header('location:payment.php?error=emptyfields');
        
        exit();

    }else{
       
        $sql= "INSERT INTO payment(first_name,last_name,email,phone,card_number,amount)VALUES(?,?,?,?,?,?)";
        $stmt= $conn->prepare($sql);
        $stmt->bind_param('ssssss',$first_name,$last_name,$email,$phone,$card_number,$amount);
        $stmt->execute();
        header('location:booking.php?success=paymentsucessfully');
        }
       
       
        

    }


