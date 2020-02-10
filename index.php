<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
                <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


        <title>Login</title>
        <style>
            .bgcolor{background-color: #c1c1c1;}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="container bgcolor">
                      <form action="validation.php" method="post" class="form">
                         <div class="form-group">
                             <h3>Sign in</h3>
                         </div>

                         <div class="form-group">
                         <label>Username</label>
                         <input type="text" name ="username" class="form-control" required>
                         </div>
                         <div class="form-group">
                         <label>Password</label>
                         <input type="password" name ="password" class="form-control" required>
                         </div>
                                                   
                        <input type="submit" value="Login" class="btn btn-block btn-primary">
                                                   
                       </form>
                    </div>
                </div>
                <div class="col-md-8">
                         <form action="registration.php" method="post">
                         <div class="form-group">
                             <h3>Registration</h3>
                         </div>
    
                         <div class="form-group">
                          <label>Username</label>
                         <input type="text" name ="username" class="form-control" required>
                         </div>
                         <div class="form-group">
                         <label>Password</label>
                         <input type="password" name ="password" class="form-control" required>
                         </div>
                         <div class="form-group">
                         <label>Retype Password</label>
                         <input type="password" name ="repassword" class="form-control" required>
                         </div>
    
                          <input type="submit" name="register" value="Register" class="btn btn-primary">
                       </form>

                </div>
            </div>
        </div>          
        <?php
        // put your code here
        ?>
    </body>
</html>
