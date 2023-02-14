<html>
    <head>
   <center>
            <h1><i>Pathology Registration</i></h1> 
           </center>
        
    <style> 
input[type=text] {
  width: 25%;
  padding: 10px 20px;
  margin: 5px 0;
 border: 1px solid black; 
}
input[type=submit] {
  width: 10%;
  padding: 12px 20px;
border: 1px solid #555;
 background-color:black;
 color:white;
    
}
     .button {
width: 10%;
  padding: 12px 20px;
border: 1px solid #555;
 background-color: black;
 color:white;
    
}
           input[type=password] {
  width: 25%;
  padding: 10px 20px;
  margin: 5px 0;
 border: 1px solid black; 
}
        
           input[type=email] {
  width: 25%;
  padding: 10px 20px;
  margin: 5px 0;
 border: 1px solid black; 
}
         body  {
  background-image: url("aal3.jpg");
  background-color: #cccccc;
        background-position:center;
        background-size:cover;
        text-decoration-style: wavy;
        background-repeat: no-repeat;
        width:auto-inherit;
        height:40%;
}
 
  
</style>
    
    
 
    </head>
 


        
<body>
    <center>

<?php                              //user registration used for fetching data at user profile
include "db.php"; 

if(isset($_POST['submit']))
{		
  
$pathname=$_POST['pathname'];
$addr=$_POST['addr'];
$phno=$_POST['phno'];
$emailid=$_POST['emailid'];
    $password=$_POST['password'];
    
    $insert = mysqli_query($con," INSERT INTO path_login(pathname,addr,emailid,password,phno) VALUES ( '$pathname','$addr','$emailid','$password','$phno')");

    if(!$insert)
    {
        echo mysqli_error($con);
    }
    else
    {
         echo "<script>alert('User Registration Successful');window.location.href = 'userlogin.html';</script>";
    }
}

mysqli_close($con); // Close connection
?>


<form method="POST">
   
   
<b>Enter Pathology Name : </b><input type="text" name="pathname" >
  <br/>
         
      <b>Enter Address  : </b><input type="text" name="addr" >
  <br/>
  
        <b>Enter Email-Id : </b><input type="email" name="emailid" >
  <br/>
         <b>Enter Password: </b><input type="password" name="password" >
  <br/>
  <b>Enter Contact No: </b><input type="text" name="phno" >
  <br/>
    
  <input type="submit" name="submit" value="Add Pathology">
  
    
</form>
 <button onclick="document.location='mainlogin.html'" class="button">Back</button>
    </center>
</body>
</html>