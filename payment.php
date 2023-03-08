<?php include('./includes/header.php')?>
<?php include('./includes/nav.php')?>
<section>
  <div class="container my-3">
    <div class="header">
      <h2 class="text-center text-secondary">BOOK NOW</h2>
    </div>
    <form method="POST" action="pay.php" class="form-groups">
      <div class="d-flex">
        <h4>Full name</h4>
         <div class="mx-3">
          
          <input class="firstname" type="text" name="first_name" placeholder="first_name" >
         </div>  
         <div>

          
          <input class="lastname" type="text" name="last_name" placeholder="last_name">
         </div> 
        </div>  
          <div>
          <h4 class="name">Email</h4>
          <input class="email" type="email" name="email">
        </div>
        <div>
          <h4>Phone Number</h4>
          <input class="number" type="text" name="phone">
        </div>

        <div>
        <div>
            <h4>CARD NUMBER</h4>
            <input class="number" type="text" name="card_number">
        </div>
        <div>
            <h4>AMOUNT</h4>
            <input class="text" type="text" name="amount">
        </div>
        <div class="text-center">
          <button type="submit"class="btn btn-lg btn-success text-white" name="submit">Make payment</button>
        </div>
     
    </div>

    </form>
  </div>
</section>

<?php include('./includes/footer.php')?>