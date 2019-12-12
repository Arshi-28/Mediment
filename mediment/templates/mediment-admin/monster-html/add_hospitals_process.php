<?php

include ('common/db_connection.php');
$name=$_POST['name'];
$contact=$_POST['contact'];
$add=$_POST['address'];

$sql="INSERT INTO hospitals(name,contact,address) VALUES('$name','$contact','$add')";

mysqli_query($connect,$sql);

header("Location:add_hospitals.php?result=success");
?>