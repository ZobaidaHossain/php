<?php
$conn = mysqli_connect("localhost", 'root', "");
if(!$conn)
{
    echo "not connected";
}

if (!mysqli_select_db($conn, 'testbf')) {
    echo "not selected any db";
}

$codec = $_POST['ucode'];
$id = $_POST['id'];


$sql = "UPDATE dept SET course_code = '$codec' WHERE user_id = $id ";

if(!mysqli_query($conn,$sql))
{
    echo 'not updated yet';
    echo $conn->error;
}
else
{
    echo ' updated';
}

?>