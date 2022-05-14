<?php
	$gID  = $_POST['gID'];
	$package  = $_POST['pack'];
	$con = mysqli_connect('localhost','u155678759_axy','Aviavi200100!','u155678759_databasename1');	

	$q = ("UPDATE `tablename` SET `pack` ='$package' WHERE `tablename`.`gID` = '$gID'");
	
	$questAmt = mysqli_query($con,$q);
	//$to_encode = mysqli_fetch_all($questAmt, MYSQLI_ASSOC);
	//echo json_encode($to_encode);	
	echo json_encode($questAmt);