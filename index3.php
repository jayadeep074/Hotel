<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <style>


body{
	
	background-image: url(images/Houghton-Hotel-3-20-scaled.jpg);
	min-height: 100vh;
    background-size: cover;
    background-position: center;
}

img{
	width: 10%;
}

form{
	background-color: #ffffff;
	width:500px;
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

p{
	color: red;
}
</style>

</head>
<body>
<form>
	<div>
<div>
<img src="./images/Daco_5272205.png">
<h1>Successfully Booked</h1>
</div>

<p>
<?php
include("connect.php");
?>

<?php
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phonenumber = $_POST['phno'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];

$sql="INSERT INTO registration(firstName,lastName,gender,age,email,number,checkin,checkout) values('$firstname','$lastname','$gender','$age','$email','$phonenumber','$checkin','$checkout')";
$r=mysqli_query($jayad,$sql);
if($r)
{
	echo "Congratulations";
}
else
{
	echo "not successfully";
}
?>

<?php
echo ("$firstname  $lastname");
?>

</p>

<a href="./index.php">back home</a>
	</div>
</form>
</body>
</html>