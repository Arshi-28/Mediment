<?php

include ('common/db_connection.php');
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$spec=$_POST['specialization'];
$ed=$_POST['education'];
$hosp=$_POST['hospital'];

$sql="INSERT INTO doctors(firstname,lastname,specialization,education,hospitalid) VALUES('$firstname','$lastname','$spec','$ed','$hosp')";

mysqli_query($connect,$sql);

header("Location:add_doctors.php?result=success");
?>