<?php

$servername="localhost";
$username="root";
$password="";
$dbname="project";

$connection=mysqli_connect($servername,$username,$password,$dbname);
if($connection==false)
{
    die("Connection error.....");
}

$query="SELECT * FROM students "; 
$r=$connection->query($query);
?>


<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Student Record</h2></th> 
		</tr> 
			  <th> ID </th> 
			  <th> First Name </th> 
			  <th> Last Name </th> 
			  <th> Email </th> 
			  
		</tr> 
		
		
        <?php while($row=$r->fetch_assoc()) 
		{ 
		?> 
		<tr> <td><?php echo $row['s_id']; ?></td> 
		<td><?php echo $row['s_fname']; ?></td> 
		<td><?php echo $row['s_lname']; ?></td> 
		<td><?php echo $row['s_email']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>
