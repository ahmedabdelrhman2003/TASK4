<?php
include("db.php");
?>
<form  method="POST">
<input type="text" name="Name" placeholder="name">
<input type="password" name="password1" placeholder="password">
<input type="submit" value="sign up" name="signup">
<input type="submit" value="login" name="login">

</form>
<?php
if(isset($_POST["signup"]))
{
$db->signup();
}elseif(isset($_POST["login"])){
   $db->login(); 
}


?>