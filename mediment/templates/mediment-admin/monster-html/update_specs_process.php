<?php
include('common/db_connection.php');

$id=$_GET['id'];
$nm=$_POST['name'];
$sid=$_POST['specid'];

$sql="UPDATE specialization SET name='$nm', specid='$sid', 
if(mysqli_query($connect,$sql)){
    header("Location:view_doctors.php?result=updated");
}else{
    header("Location:view_doctors.php?result=failupdate");
}


?>