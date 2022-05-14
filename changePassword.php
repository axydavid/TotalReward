<?php

session_start();
	$con = mysqli_connect('localhost','u155678759_axy','Aviavi200100!','u155678759_databasename1');	

	$password = $_POST['pass1'];
	$id = $_SESSION['ID'];

	// echo $username;
	// echo $password;

	$q = "UPDATE tablename SET pass = '$password' WHERE ID = '$id'";
	//"insert into users(usr_ID, user, pass, class, progObj) values ('$usrID','$username', '$password', '$class', '')";
	mysqli_query($con,$q);
	$_SESSION['pass'] = $password;
	
	if($_SESSION['ID']=="1") header('location:adminPanel.php');
	else header('location:homeNew.php');	

?>


