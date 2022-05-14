<?php
	$gID  = $_POST['gID'];
	$con = mysqli_connect('localhost','u155678759_axy','Aviavi200100!','u155678759_databasename1');	

	$query = "UPDATE `tablename` SET ";
	
	if(isset($_POST['pack']))
	{
		$value = $_POST['pack'];
		$query .= "`pack` = '$value', ";
	} 

	if(isset($_POST['hID']))
	{
		$value = $_POST['hID'];
		$query .= "`hID` = '$value', ";
	} 

	if(isset($_POST['gCash']))
	{
		$value = $_POST['gCash'];
		$query .= "`gCash` = '$value', ";
	} 

	if(isset($_POST['name']))
	{
		$value = $_POST['name'];
		$query .= "`name` = '$value', ";
	} 

	if(isset($_POST['user']))
	{
		$value = $_POST['user'];
		$query .= "`user` = '$value', ";
	} 

	if(isset($_POST['password']))
	{
		$value = $_POST['password'];
		$query .= "`pass` = '$value', ";
	} 
	if(isset($_POST['solo']))
	{
		$value = $_POST['solo'];
		$query .= "`solo` = '$value', ";
	} 
	$query = substr($query, 0, -2);
	$query .=" WHERE `tablename`.`gID` = '$gID'";
	$questAmt = mysqli_query($con,$query);
	if(!$questAmt)
	{
		$error = mysqli_error($con);
	}
	//$to_encode = mysqli_fetch_all($questAmt, MYSQLI_ASSOC);
	//echo json_encode($to_encode);	
	echo json_encode($questAmt);