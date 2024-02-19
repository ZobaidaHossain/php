<?php
$conn = mysqli_connect("localhost", 'root', "");
if(!$conn)
{
    echo "not connected";
}

if (!mysqli_select_db($conn, 'web')) {
    echo "not selected any db";
}

$id = $_POST['pid'];
$name = $_POST['pname'];
$price = $_POST['pprice'];
$quant = $_POST['pquantity'];
$add = $_POST['paddress'];



if(isset($_POST["insert"]))
{
    $sql = "INSERT INTO productt (product_id, product_name, price, quantity, product_address) VALUES ( '$id', '$name' , '$price', '$quant', '$add')";

    if(!mysqli_query($conn,$sql)) 
{
    echo 'not inserted yet';
    echo $conn->error;
}
else
{
    echo ' inserted';
} 

}


elseif(isset($_POST["update"]))
{
    
    $sql = "UPDATE productt SET price = $price,quantity = $quant WHERE product_id = $id ";

    if(!mysqli_query($conn,$sql))
{
    echo 'not updated yet';
    echo $conn->error;
}
else
{
    echo ' updated';
}

}
elseif(isset($_POST["delete"]))
{
    $sql = " DELETE FROM productt WHERE product_id = $id ";

if(!mysqli_query($conn,$sql))
{
    echo 'not deleted yet';
    echo $conn->error;
}
else
{
    echo ' deleted';
}
}




?>