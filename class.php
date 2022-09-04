<?php

class main
{
    private $db;
   function __construct($db)
   {
     $this->_db=$db;
   }
   function login()
   {
     if(isset($_POST["login"]))
     {
        $user = $_POST["Name"];
        $pw = $_POST["password1"];
        
       if(!empty($user) AND !empty($pw))
       {
         $query = "SELECT * FROM identity WHERE Name1 = :username AND password1 = :pass"; 
         $stmt = $this->_db->prepare($query);
         $stmt->execute(
             array(
                 'username'  => $_POST["Name"],
                 'pass'  => $_POST["password1"]
             )
             );
             $count = $stmt->rowCount();
             if($count > 0)
             {
                 $_SESSION["username"] = $_POST["Name"];
                 header("location:home.php");
                 
             }
           else
             {
                $message = '<label>Username Or Password is incorrect</label>';
             }
                  
        }     
        else
        {
          echo"enter";
        }
     
    
            }

    } 
    function signup(){
        if(isset($_POST["signup"])){
            $fname=$_POST['Name'];
            $pass=$_POST['password1'];
            $q = "INSERT INTO identity (Name1,password1) VALUES ('$fname', '$pass')";
         $this->_db->exec($q);

        }
    }
}



?>