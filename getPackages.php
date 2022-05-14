<?php
session_start();
   
   if(!isset($_SESSION['ID'])){
   	header('location:index.php');
   }
   if(!isset($_POST['gID']))
   {
      $i = $_SESSION['gID'];
   }
   else
   {
      $i =  $_POST['gID'];
   }


   $con = mysqli_connect('localhost','u155678759_axy','Aviavi200100!','u155678759_databasename1');	

   $sql1 = "SELECT SUM(pack) as pack, SUM(solo) as solo, cID FROM `tablename` WHERE `gID` = $i ";
   $result1 = mysqli_query($con, $sql1);
   $row1 = mysqli_fetch_assoc($result1);
   //L1
   $level = array();
   array_push($level,array("pack"=>$row1['pack'],"solo"=>$row1['solo']*= 50));

   //L2 +
   while(1)
   {
      $sql1 = "SELECT SUM(pack) as pack, SUM(solo) as solo, GROUP_CONCAT(cID SEPARATOR '') as cID FROM u155678759_databasename1.`tablename` WHERE `gID` in (";
      $cID = $row1['cID'];
      if(strlen($cID)< 2) break;
      $cID1 = explode(",", $row1['cID']);
      $cID1 =  array_filter($cID1);
      foreach ($cID1 as $value) 
      {
         $sql1 .= $value . ', ';
      } 
      $sql1= substr($sql1, 0, -2);
      $sql1 .= ')';
      $result1 = mysqli_query($con, $sql1);
      $row1 = mysqli_fetch_assoc($result1);
      if($row1['pack'] > 0 OR $row1['solo'] > 0 ) 
      {
         if(count($level) == 4) array_push($level,array("pack"=>$row1['pack'],"solo"=>$row1['solo']*= 100));
         else array_push($level,array("pack"=>$row1['pack'],"solo"=>$row1['solo']*= 50));
      }
      if(count($level) > 4) break;
      $row1['cID'] = print_r($row1['cID'], true);
   }
   // $sql1 = SELECT * FROM `table` where ID in (5263, 5625, 5628, 5621) 

   echo json_encode($level);//row1 is an array response from mysqli query, we get this baby back to the js call trouch echo