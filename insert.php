<?php
    
    echo "<center><h2> You Are Done <h2></center>";


$s_id=$_REQUEST["id"];
$s_fname=$_REQUEST["fn"];
$s_lname=$_REQUEST["ln"];
$s_email=$_REQUEST["email"];
$s_dob=$_REQUEST["dob"];
$gender=$_REQUEST["gender"];
$s_number=$_REQUEST["number"];
$s_add=$_REQUEST["add"];
$s_coll_name=$_REQUEST["clg_name"];
$ac_year=$_REQUEST["ac_year"];
$ssc_py=$_REQUEST["ssc_py"];
$ssc_gpa=$_REQUEST["ssc_gpa"];
$hsc_py=$_REQUEST["hsc_py"];
$hsc_gpa=$_REQUEST["hsc_gpa"];
$program=$_REQUEST["program"];
$dept=$_REQUEST["dept"];
$semester=$_REQUEST["semester"];




$servername="localhost";
$username="root";
$password="";
$dbname="project";

$connection=mysqli_connect($servername,$username,$password,$dbname);
if($connection==false)
{
    die("Connection error.....");
}

$query1="INSERT INTO students (s_id, s_fname, s_lname, s_email) VALUES($s_id,'$s_fname','$s_lname','$s_email')";
$query2="INSERT INTO std_info (s_id, s_dob, gender, s_number, s_add) VALUES($s_id,'$s_dob','$gender',$s_number,'$s_add')";
$query3="INSERT INTO std_coll_info (s_id, s_coll_name, ac_year, ssc_py, ssc_gpa, hsc_py, hsc_gpa) VALUES($s_id,'$s_coll_name',$ac_year,$ssc_py,$ssc_gpa,$hsc_py,$hsc_gpa)";
$query4="INSERT INTO registration (std_id, program, dept, semester) VALUES($s_id,'$program','$dept','$semester')";


if(mysqli_query($connection,$query1)) {
    if(mysqli_query($connection,$query2)) {
        if(mysqli_query($connection,$query3)) {
            if(mysqli_query($connection,$query4)){
                
                echo("Data inserted");

            }

        }
    }
}
else
{
    echo("Error data not submitted...");
}
?>