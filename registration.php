<?php


session_start();
$connect= mysqli_connect('localhost', 'root');

mysqli_select_db($connect, 'gac');
if(isset($_POST["register"]))  
 {  
      if(empty($_POST["username"]) || empty($_POST["password"])|| empty($_POST["repassword"]))  
      {   
          header('location:index.php');
      }  
      else if($_POST["password"]!= $_POST["repassword"]) 
           {header('location:index.php');}
      else
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $passwordg = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($passwordg);  
           $repasswordk = mysqli_real_escape_string($connect, $_POST["repassword"]); 
           $repassword = md5($repasswordk);  


           $query = "INSERT INTO registered (username, password, repassword) VALUES('$username', '$password','$repassword')";  
           if(mysqli_query($connect, $query))  
           {       
           header('location:index.php');
           }  
      }  
 }  

?>  



