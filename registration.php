<?php

session_start();
//header('location:index.php');

$con = mysqli_connect('localhost','u155678759_axy','Aviavi200100!','u155678759_databasename1');	

	$gID = $_POST['gID'];
	$pID = $_POST['pID'];
	$hID = $_POST['hID'];
	$name = $_POST['name'];
	$gCash = $_POST['gCash'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	

	// echo $username;
	// echo $password;

	$check = "select gID from tablename where gID='$gID'";
	$resultcheck = mysqli_query($con,$check);	

	 $row = mysqli_num_rows($resultcheck);
		if($row == 1)
		{
			header('location:adminPanel.php?msg=failed');
		}	
		else
		{

			$check2 = "select gID from tablename where name='$name' order by ID LIMIT 1";
			$resultcheck2 = mysqli_query($con,$check2);
			if($resultcheck2 AND empty($hID))
			{
				$row2 = mysqli_fetch_assoc($resultcheck2);
				$hID = $row2['gID'];
			}

			$q = "insert into tablename(gID, cID, hID, name, gCash, user, pass) values ('$gID', '', '$hID','$name', '$gCash', '$user', '$pass'); UPDATE tablename SET pack = LENGTH(CONCAT(cID, CONCAT('$gID',','))) - LENGTH(replace(CONCAT(cID, CONCAT('$gID',',')),',','')),cID = CONCAT(cID, CONCAT('$gID',',')) WHERE gID = '$pID'";
			// $s = mysqli_multi_query($con,$q);
			if (!(mysqli_multi_query($con, $q))) {
				header('location:adminPanel.php?msg=failed');
			  }
			// $row = mysqli_num_rows($result);
			else header('location:adminPanel.php?msg=success');
		}
?>


