<?php
include("connect.php");
 $idd = $_GET['delete'];
 $ssr = mysqli_query($jayad,"SELECT * FROM registration WHERE id = '$idd'");
 while($roww = mysqli_fetch_array($ssr))
 {
	
	$uupd = mysqli_query($jayad,"DELETE FROM registration WHERE id = '$idd'");
	if($uupd){
		header('location:index4.php');
	}
 } 
	 
	 
 ?>