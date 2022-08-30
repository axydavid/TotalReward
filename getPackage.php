<?php
session_start();
   
   if(!isset($_SESSION['ID'])){
   	header('location:index.php');
   }
      $i =  $_POST['gID'];
      $con = mysqli_connect('localhost','u155678759_axydavid','Aviavi200100!','u155678759_databasename');	

      $sql1 = "SELECT pack FROM `tablename` WHERE `gID` = $i ";
      $result1 = mysqli_query($con, $sql1);
      // if(!$result1) header('location:check.php');
      $row1 = mysqli_fetch_assoc($result1);

      echo $row1['pack'];//row1 is an array response from mysqli query, we get this baby back to the js call trouch echo