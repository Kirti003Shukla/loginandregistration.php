<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
if(!isset($_SESSION['username']))
    header('location:index.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container text-center"><h3 > Welcome <?php echo $_SESSION['username'];?></h3>      </div>

        
         <div class="container row"> 
         <div class="col-md-4">    
        <form method="post" action="upload.php" enctype="multipart/form-data">
            <div class="form-group"><input type="file" name="myfile" class="form-control">
            </div>
            <input type="submit" value="upload" class="btn btn-primary">
        </form><br/>
         </div>
           <div class="container"> 
           <a  href="logout.php" class="btn btn-primary">Logout</a>
            </div>
         </div>
</body>
</html>


