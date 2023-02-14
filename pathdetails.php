
<html>
<head>
    
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 2px solid #dddddd;
  text-align: left;
  padding: 8px;
border-color: black;
    }
    
     .button {
  background-color: black; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
    }
       

</head>
</style>
    

<body>
    <a href="javascript:void(0);" title="View Full Details" onclick="window.print();">Print Data</a>
    <center><h1><i> Room Details</i></h1></center>

	
	<div>
		<table border="1">
			<tr>
				 <th>Seater</th>
    <th>Room No</th>
    <th>Fees</th>
    <th>id</th>
                            </tr>	
    
			<tbody>
				<?php
					include('db.php');
                $result=mysqli_query($con,"select * from `rooms`")or die( mysqli_error($con)); //added when error occured
					
					while($row=mysqli_fetch_array($result)){ 
						?>
						<tr>
							<td><?php echo $row['seater']; ?></td>
							<td><?php echo $row['room_no']; ?></td>
                            <td><?php echo $row['fees']; ?></td>
							<td><?php echo $row['id']; ?></td>
							
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>

    </div>
    
    <button onclick="document.location='adminhome.php'" class="button">Back</button>
    </body>
    </head>
</html>
