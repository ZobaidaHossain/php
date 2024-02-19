<?php
$conn = mysqli_connect("localhost", 'root', "");
if(!$conn)
{
    echo "not connected";
}

if (!mysqli_select_db($conn, 'testbf')) {
    echo "not selected any db";
}


$id = $_POST['sid'];


$sql = " SELECT course_name, course_code FROM dept WHERE user_id = $id ";

$res = mysqli_query($conn, $sql);

while($row = $res->fetch_array())
{
    echo $row["course_name"].'<br>';
    echo $row["course_code"];
}
?>