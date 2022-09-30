<?php
//$id=$_REQUEST["id"];

$servername="localhost";
$username="root";
$password="";
$dbname="project";

$connection=mysqli_connect($servername,$username,$password,$dbname);
if($connection==false)
{
    die("Connection error.....");
}

$query="SELECT students.s_id, s_fname, s_lname, gender, hsc_py
FROM ((students
INNER JOIN std_info ON students.s_id=std_info.s_id)
INNER JOIN std_coll_info ON students.s_id=std_coll_info.s_id) WHERE std_coll_info.hsc_gpa=5.00";




//WHERE name='$id'
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
		<th colspan="5"><h2>Students who got gpa5 in HSC</h2></th> 
		</tr> 
			  <th> ID </th> 
			  <th> First Name </th> 
			  <th> Last Name </th> 
			  <th> Gender </th>
              <th> HSC Passing Year</th>
			  
		</tr> 
		
		
        <?php while($row=$r->fetch_assoc()) 
		{ 
		?> 
		<tr> 
        <td><?php echo $row['s_id']; ?></td> 
		<td><?php echo $row['s_fname']; ?></td> 
		<td><?php echo $row['s_lname']; ?></td> 
		<td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['hsc_py']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>
