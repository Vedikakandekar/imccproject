<?php 
include("db.php");

if(isset($_POST['sub']))
{
$patho_emailid = $_POST['patho_emailid'];
$patho_password = $_POST['patho_password'];


$mysqli_result = mysqli_query($con,"select * from path_login where emailid='$patho_emailid'and password='$patho_password'")or die( mysqli_error($con));
$numRows = mysqli_num_rows($mysqli_result);
if($numRows  == 1){
echo "You are login Successfully ";
header("location:pathdashboard.php");   // create my-account.php page for redirection 	
}
else
{
	echo "failed ";
}
}
?>


