<?php
session_start();
ob_start();
$dsn='mysql:host=localhost;dbname=user';
$user= 'root';
$pass= '';
try {
   //$name1=$_POST['Name'];
   //$name2=$_POST['password1'];
    $conn= new PDO($dsn, $user, $pass) ; // Start A New Connection With PD0
    
   
}
catch(PDOException $e) {
echo 'Failed ' . $e->getMessage();
}

include("class.php");
$db=new main($conn)

?>
