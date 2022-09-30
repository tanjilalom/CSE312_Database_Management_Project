<?php
$id=$_REQUEST["id"];

$servername="localhost";
$username="root";
$password="";
$dbname="project";

$connection=mysqli_connect($servername,$username,$password,$dbname);
if($connection==false)
{
    die("Connection error.....");
}
//$query="SELECT * FROM students WHERE name='$id'";


$query="SELECT s_id, s_fname, s_lname, dept, name_dept, semester
FROM students, registration, dept_details
WHERE (s_id=$id)
AND (students.s_id=registration.std_id)
AND (registration.dept=dept_details.dept_code)";


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
		<th colspan="6"><h2>Student Record</h2></th> 
		</tr> 
			  <th> ID </th> 
			  <th> First Name </th> 
			  <th> Last Name </th> 
			  <th> Department </th>
              <th>department Name</th>
              <th>Semester</th>
			  
		</tr> 
		
		
        <?php while($row=$r->fetch_assoc()) 
		{ 
		?> 
		<tr> <td><?php echo $row['s_id']; ?></td> 
		<td><?php echo $row['s_fname']; ?></td> 
		<td><?php echo $row['s_lname']; ?></td> 
		<td><?php echo $row['dept']; ?></td> 
        <td><?php echo $row['name_dept']; ?></td>
        <td><?php echo $row['semester']; ?></td>


		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>
