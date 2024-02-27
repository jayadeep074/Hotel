<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Save offer</title>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="script.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	<style>
		*{
			margin: 0;
			padding:0;
			box-sizing: border-box;
		}

		body{
			background-color: #ded6c8;
		}

		.br{
			display: flex;
			align-items: center;
			border: 2px solid;
		}

		.col img{
			width: 100%;
		}
	</style>
</head>
<body>

<?php
include("connect.php");
?>


<form class="needs-validation" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype='multipart/form-data' novalidate>

<div class="offer mt-5">
	<div class="container">
	<div class="row br p-4">
		<div class="col">
			<img src="./images/coupon.jpg" alt="">
		</div>
		<div class="col">
		<div class="form-group">
    		<label for="Name">Name</label>
    		<input type="text" name="name" class="form-control" id="checkin" required>
  		</div>
  		<div class="form-group">
    		<label for="checkout">Coupon Code</label>
    		<input type="text" name="pwd" class="form-control" id="checkout" required>
  		</div>

		  <div class="form-group">
    		<label for="checkout">Email</label>
    		<input type="text" name="email" class="form-control" id="checkout" required>
  		</div>
		  <button class="btn btn-primary mt-2" name="submit" type="submit">Submit</button>
		  <?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST['name']) || empty($_POST['pwd']) || empty($_POST['email']))
	{
		echo "no validation";
	}
	else
	{
		$namee = $_POST['name'];
		$passwordd = $_POST['pwd'];
		$emaill = $_POST['email'];
		$emp = mysqli_query($jayad,"INSERT INTO rapplyy(name,password,email) 
				VALUES('$namee','$passwordd','$emaill')");
		echo "sucessfully";
		
	}
}
?>
		</div>
		
	</div>
	</div>
</div>






<div class="container mt-5">
<h2>Save Offer details</h2>
<div class="row">
<table id="example" class="display" width="100%" cellspacing="0">
<thead>
<tr>
<th>Register</th>
<th>Name</th>
<th>Coupon</th>
<th>Email</th>
</tr>
</thead>
</table>
</div>
</div>

<script src="script2.js"></script>
</body>
</html>