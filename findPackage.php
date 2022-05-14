`<?php
session_start();
   
   if(!isset($_SESSION['ID'])){
   	header('location:index.php');
   }
   $level = array();
      $i =  $_SESSION['gID'];
      $name = $_SESSION['name'];
      $con = mysqli_connect('localhost','u155678759_axy','Aviavi200100!','u155678759_databasename1');	

      $sql1 = "SELECT gID, name FROM `tablename` WHERE `hID` = $i OR `gID` = $i ORDER BY name='$name' DESC,name, gID";
      $result1 = mysqli_query($con, $sql1);
      // if(!$result1) header('location:check.php');
      // $row1 = mysqli_fetch_array($result1);
      if (mysqli_num_rows($result1) > 0) 
      {
         while($row2 = mysqli_fetch_assoc($result1)) 
         {
            array_push($level,array("gID"=>$row2["gID"], "name"=>$row2["name"]));
         }
      }

      echo json_encode($level);
      //row1 is an array response from mysqli query, we get this baby back to the js call trouch echo