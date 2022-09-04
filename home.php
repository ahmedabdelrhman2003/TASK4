<?php

include ('db.php');
if ($_SESSION[ "username"]== false) 
{
 header("location:index.php");
}
else{
    echo "hi" . $_SESSION["username"];
    echo '<a href="logout.php">logout</a>';
}
?>