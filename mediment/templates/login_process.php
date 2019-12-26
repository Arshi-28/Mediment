<?php
session_start();
include('common/db_connection.php');
if($_POST['user-name']=='roksana' && $_POST['password']=='password'){
    $_SESSION['fullname'] = 'Roksana Islam';
	header('Location: mediment-admin/monster-html/index.php');
}else{
	
    header('Location: login1.php?result=err');
}
?>