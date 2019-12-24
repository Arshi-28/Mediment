<?php
include('common/db_connection.php');
$id =$_GET['id'];
	$sql="UPDATE specs SET isdelete='1' WHERE specid=$id";
	mysqli_query($connect,$sql);
	header('Location: view_specs.php?result=deleted');
?>