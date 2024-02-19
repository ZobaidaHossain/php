<?php
$conn = mysqli_connect("localhost", 'root', "");
if(!$conn)
{
    echo "not connected";
}

if (!mysqli_select_db($conn, 'testbf')) {
    echo "not selected any db";
}


$id = $_POST['did'];


$sql = " DELETE FROM dept WHERE user_id = $id ";

if(!mysqli_query($conn,$sql))
{
    echo 'not deleted yet';
    echo $conn->error;
}
else
{
    echo ' deleted';
}

?>