<html>
<head>
    <style>
        body{
	background-image: url(images/Houghton-Hotel-3-20-scaled.jpg);
	min-height: 100vh;
    background-size: cover;
    background-position: center;
}

form{
	background-color: #ffffff;
	width:600px;
	height: 350px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translateX(-50%) translateY(-50%);
	text-align:center;
	display: flex;
	justify-content: center;
	align-items: center;
}

input{
	width: 250px;
	height: 40px;
	margin: 10px;
	font-size: 20px;
}

.btn{
	background-color: red;
	color: #ffffff;
	font-weight: bold;
}
    </style>
</head>
<body bgcolor="blue">
<form action="" method="POST">
<?php
 include("connect.php");
 $idd = $_GET['edit'];
 $ssr = mysqli_query($jayad,"SELECT * FROM registration WHERE id = '$idd'");
 while($roww = mysqli_fetch_array($ssr))
 {
	 $ufirstname = $roww[1];
	 $ulastname = $roww[2];
     $ugender = $roww[3];
     $uage = $roww[4];
     $uemail = $roww[5];
     $unumber = $roww[6];
     $checkin = $roww[7];
     $checkout = $roww[8];

 ?>

<center> 
 <input type="text" name="first" value=<?php echo $ufirstname;?>>
 <input type="text" name="last" value=<?php echo $ulastname;?>><br>
 <input type="text" name="gender" value=<?php echo $ugender;?>>
 <input type="number" name="age" value=<?php echo $uage;?>><br>
 <input type="text" name="email" value=<?php echo $uemail;?>>
 <input type="number" name="number" value=<?php echo $unumber;?>><br>
 <input type="date" name="checkin" value=<?php echo $checkin;?>>
<input type="date" name="checkout" value=<?php echo $checkout;?>><br>
<input type="submit" name="submit" value="Change" class="btn"/>
</center>

<?php
$idd = $_GET['edit'];
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$ufirstname = $_POST['first'];
	$ulastname = $_POST['last'];
    $ugender = $_POST['gender'];
    $uage = $_POST['age'];
    $uemail = $_POST['email'];
    $unumber = $_POST['number'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
	$uupd = mysqli_query($jayad,"UPDATE  registration SET firstName = '$ufirstname', lastName = '$ulastname', 
    gender = '$ugender', age = '$uage', email = '$uemail', number = '$unumber', checkin = '$checkin', checkout = '$checkout' WHERE id = '$idd'");
	if($uupd){
		header('location:index4.php');
	}
}
 }

?>

</body>
</html>