<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $con=mysqli_connect("localhost","root","");
        if(!$con){
            echo "server connect hoynai";
        }
        else{
            echo"done";
        }
        if(!mysqli_select_db($con,'ss')){
            echo 'database connect hoynai';
        }
        $name=$_POST['uname'];
        $email=$_POST['uemail'];
        $sql="INSERT INTO aa(uname,uemail) VALUES('$name','$email')";
        if(!mysqli_query($con,$sql)){
            echo"inserted";
        }
        
        ?>
    </body>
</html>
