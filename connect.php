<?php 
$dbhttp="localhost";
$dbuser="root";
$dbpwd="";
$db="reg";
$jayad=mysqli_connect($dbhttp,$dbuser,$dbpwd,$db);
if(!$jayad){
////die("Connect failed:" .mysqli_connect_error());
}
//echo "Connect Successfully";
?>