<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php

echo '<form method="POST">
         name: <input type="text" name="name">
         <button type="submit" name="save">Save</button>
      </form>';
 $con = mysqli_connect('localhost', 'root', '');

        if(!$con){
            echo "not good";
        }
        else{
            echo "hehe! done!";
        }
        if(!mysqli_select_db($con, 'ra'))
        {
            echo "Database connect hy nai";
        }
        $name = $_POST['name'];
        $sql = "INSERT INTO ta (name) VALUES('$name')";
        if(!mysqli_query($con, $sql)){
            echo "not inserted";
        }
        else{
            echo "inserted/saved";
        }
        ?>
   </body>
</html>

       