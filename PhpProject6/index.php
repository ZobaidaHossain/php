
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $con= mysqli_connect('localhost','root','');
        if(!$con)
        {
            echo 'Server not connected';
        }
            if(!mysqli_select_db($con, 'abir'))
        {
            echo "Database not selected";
        }
 else {echo "Successfully connected";}
 $id=$_POST['product_id'];
 $name=$_POST['product_name'];
 $price=$_POST['product_price'];
 $quantity=$_POST['product_quantity'];
 $address=$_POST['address'];
 if(array_key_exists('insert', $_POST)) {

       
 $sql1="INSERT INTO darun(product_id,product_name,product_price,product_quantity,address)VALUES('$id','$name','$price','$quantity','$address')";

         if(!mysqli_query($con,$sql1))
         {
             echo "Not Inserted";
         }
 else
 {
     echo"Inserted/Save";
 }
  header("refresh:2 ,url=index.html");
 }
 
  
  if(array_key_exists('delete', $_POST)) {

       
 $sql2="DELETE FROM darun WHERE product_id='$id'";
   if(!mysqli_query($con,$sql2))
         {
             echo "Not Deleted";
         }
 else
 {
     echo"Deleted/Save";
 }
  header("refresh:2 ,url=index.html");
 }
   if(array_key_exists('update', $_POST)) {

       
 $sql2="UPDATE darun SET product_name='$name', product_price='$price', product_quantity='$quantity',address='$address' WHERE product_id='$id'";
   if(!mysqli_query($con,$sql2))
         {
             echo "Not Updated";
         }
 else
 {
     echo"Updated/Save";
 }
  header("refresh:2 ,url=index.html");
 }
 

 
  

      
 ?>
    </body>
</html>