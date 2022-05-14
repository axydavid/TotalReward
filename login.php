<?php
  	ob_start();
	session_start();
	//session_destroy();	
	$con = mysqli_connect('localhost','u155678759_axy','Aviavi200100!','u155678759_databasename');
	if($con->connect_error){
		echo "Connection failed:";
	}

	$username = $_POST['user'];
	$password = $_POST['pass'];

	$q = "select * from tablename where (user = '$username' or gID = '$username' or name = '$username') && pass='$password'";

	$result = mysqli_query($con,$q);
	try{$row = mysqli_num_rows($result);} catch(exception $e) {$row = false;}

	if($row == true){

		while($row1 = mysqli_fetch_assoc($result)) 
		{
			$_SESSION['user'] = $row1["user"];
			$_SESSION['pass'] = $row1["pass"];
			$_SESSION['ID'] = $row1["ID"];
			$_SESSION['gID'] = $row1["gID"];
			$_SESSION['hID'] = $row1["hID"];
			$_SESSION['name'] = $row1["name"];
			break;
		}
		// $random = session_id();
		// $finalresult = " UPDATE users SET `sessionID` = '$random' WHERE `usr_ID` = '$usr_ID' ";
		// $queryresult = mysqli_query($con,$finalresult);
		// if($queryresult) $_SESSION['sessionID'] = $random;
		if($_SESSION['ID']=="1") 
		{
			$_SESSION['user'] = NULL;
			$_SESSION['pass'] = NULL;
			$_SESSION['ID'] = NULL;
			$_SESSION['gID'] = NULL;
			$_SESSION['hID'] = NULL;
			$_SESSION['name'] = NULL;
			echo "ERROR #28172: Execution failed. \r\n Back Trace: select * from nd2937s where (ID = 'inputKey')";//header('location:adminPanel.php');
		}
		else header('location:homeNew2.php');	
		exit();
	}
	else
	{
		header('location:index.php?msg=nousr');
		exit();
	}
	//echo("<script>location.href = '".ADMIN_URL."/index.php?msg=$msg';</script>");
	ob_end_flush();
?>