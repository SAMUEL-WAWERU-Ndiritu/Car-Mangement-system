<?php include('./includes/header.php')?>
<?php include('./includes/log.php') ;?>
<body class="bg-primary">
    <div class="header">
    <h1 class="text-center"> LOGIN</h1>
    </div>
    <section>
    <div class="container bg-muted">
        <div class="row">
            <div class="col-md-5 mx-auto my-5">
                <div>
                    
                    <form action="login.php" method="POST" class="form-group text-dark">
    <?php include('./includes/error.php')?>
    Username :<br><input type="text" name="username" class="form-controls"><br>
   
  
    Password:<br><input type="password" name="password_1"  class="form-controls"><br>
    
    <input type="submit" value="register" name="login"  class="form-controls btn btn-lg btn-success">
    <p>
    Already a member? <a href="index.php">Sign Up</a>
    </p>
    </form>
                  
                  
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
