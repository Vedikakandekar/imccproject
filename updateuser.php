<?php
session_start();
	include('db.php');
    $emailid= $_SESSION["emailid"];
	
 
	 $emailid = $_POST['emailid'];
    $password = $_POST['password'];
 $phno = $_POST['phno'];
   
 
	



 $update = mysqli_query($con," update user_login  set  emailid='$emailid', password='$password' , phno='$phno' where phno='$phno' ");

    if(!$update)
    {
        echo mysqli_error($con);
    }
    else
    {
        echo "Records Updated  successfully of User.";
         header("location:userdashboard.php");
         
        
    }


mysqli_close($con); // Close connection
?>
