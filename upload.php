<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */session_start();

echo $_FILES['myfile']['name'];
echo ($_FILES['myfile']['size']);
echo $_FILES['myfile']['tmp_name'];
echo $_FILES['myfile']['error'];
?>
