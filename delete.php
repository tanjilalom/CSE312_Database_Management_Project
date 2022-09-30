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

$query1="DELETE FROM registration WHERE (std_id=$id)";
$query2="DELETE FROM std_coll_info WHERE (s_id=$id)";
$query3="DELETE FROM std_info WHERE (s_id=$id)";
$query4="DELETE FROM students WHERE (s_id=$id)";


if(mysqli_query($connection,$query1)) {
    if(mysqli_query($connection,$query2)) {
        if(mysqli_query($connection,$query3)) {
            if(mysqli_query($connection,$query4)){
                
                echo("Data delete");

            }

        }
    }
}
else
{
    echo("Error data not delete...");
}
?>