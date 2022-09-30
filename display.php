<?php
$displayname=$_REQUEST["qname"];

$servername="localhost";
$username="root";
$password="";
$dbname="project";

$connection=mysqli_connect($servername,$username,$password,$dbname);
if($connection==false)
{
    die("Connection error.....");
}

$query="SELECT id,pass FROM information WHERE name='$displayname'";  

$query="SELECT * FROM                   /*((names INNER JOIN addresses ON names.personID = addresses.personID)
                                        INNER JOIN emailadresses ON names.personID = emailadresses.PersonID)
                                        INNER JOIN PhoneNumbers ON names.PersonID = PhoneNumbers.PersonID
                                        WHERE   lastName LIKE '*" & last & "*'" */

$r= mysqli_query($connection, $query);                             //$connection->query($query);

if($r->num_rows>0)
{
    while($row=$r->fetch_assoc())
    {
        echo"Student ID: " .$row['id']. "Pass: ".$row['pass'];
    }
}
$connection->close();
?>