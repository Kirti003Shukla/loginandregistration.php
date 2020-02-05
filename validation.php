<?php

session_start();
$connect= mysqli_connect('localhost', 'root');
/*if($connect)
{echo 'connected';}
else 
{die('not connect');}*/
mysqli_select_db($connect, 'gac');

           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $passwordm = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($passwordm);  

$query= "select * from registered where username='$username' AND password='$password'";
$result= mysqli_query($connect, $query);
if( mysqli_num_rows($result)>0)
            // output data of each row
{ $row = mysqli_fetch_assoc($result);

  if($username==$row['username'])
{$_SESSION['username']=$username;
header('location:welcome.php');
}
}
 else { 
         header('location:index.php');
 }
?>  



