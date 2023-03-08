<?php include('./includes/header.php')?>
<?php include('./includes/server.php') ;?>
<body class="bg-primary">
    <div class="header">
    <h1 class="text-center"> Register</h1>
    </div>
    <section>
    <div class="container bg-muted">
        <div class="row">
            <div class="col-md-5 mx-auto my-5">
                <div>
                    
                    <form action="register.php" method="POST" class="form-group text-dark">
    <?php include('./includes/error.php')?>
    Username :<br><input type="text" name="username" class="form-controls"><br>
    Email: <br><input type="email" name='email'  class="form-controls"><br>
    Renter:<input type="checkbox" name="renter" value="renter">
    Lender:<input type="checkbox" name="lender" value="lender"><br>
    Password:<br><input type="password" name="password_1"  class="form-controls"><br>
    Confirm Password:<br><input type="password" name="password_2"  class="form-controls"><br>
    <input type="submit" value="register" name="register"  class="form-controls btn btn-lg btn-success">
    <p>
    Already a member? <a href="login.php">Sign in</a>
    </p>
    </form>
                  
                  
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>

