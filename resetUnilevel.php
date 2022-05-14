<?php
	$con = mysqli_connect('localhost','u155678759_axy','Aviavi200100!','u155678759_databasename1');	

	$q = ("UPDATE `tablename` SET `solo` = 0 ");
	$questAmt = mysqli_query($con,$q);
	//$to_encode = mysqli_fetch_all($questAmt, MYSQLI_ASSOC);
	//echo json_encode($to_encode);	
	if($questAmt=="1") header('location:unilevel.php?msg=success');
	else header('location:unilevel.php?msg=failed');