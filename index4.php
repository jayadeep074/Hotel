<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>

    <style>
    body{
	
	    background-image: url(images/Houghton-Hotel-3-20-scaled.jpg);
	    min-height: 100vh;
        background-size: cover;
        background-position: center;
        
    }

    .col a{
        background-color: red;
        padding: 5px 15px;
        color: white;
        text-decoration: none;
        text-transform: capitalize;
        border-radius: 25px;
    }

    .btn1{
        display: flex;
        justify-content: center;
    }

    .btn1 a{
        font-size: 18px;
        text-decoration: none;
        text-transform: capitalize;
        color: #ffffff;
        background-color: red;
        padding: 10px;
        margin-top: 10px;
    }

   

</style>
</head>
<body>
<?php
include("connect.php");
?>

<?php
$myapp = mysqli_query($jayad,"SELECT * FROM registration");
while($em = mysqli_fetch_array($myapp))
{
$ffname = $em['1'];
$flast = $em['2'];
$gender = $em['3'];
$age = $em['4'];
$email = $em['5'];
$phonenumber = $em['6'];
$checkin = $em['7'];
$checkout = $em['8'];

?>

<div class="container">
<div class="td row">
    <div class="row rounded bg-light mt-5 p-1">
<div class="col-sm-1 bg-secondary">
<h6 class="name"><?php echo $ffname;?></h6>
</div>

<div class="col-sm-1 bg-secondary">
<h6 class="name"><?php echo $flast;?></h6>
</div>

<div class="col-sm-1">
<h6 class="g"><?php echo $gender;?></h6>
</div>

<div class="col-sm-1 bg-secondary">
<h6 class="name"><?php echo $age;?></h6>
</div>

<div class="col-sm-2">
<h6 class="g"><?php echo $email;?></h6>
</div>

<div class="col-sm-1 bg-secondary">
<h6 class="name"><?php echo $phonenumber;?></h6>
</div>

<div class="col-sm-1">
<h6 class="g"><?php echo $checkin;?></h6>
</div>

<div class="col-sm-2">
<h6 class="name"><?php echo $checkout;?></h6>
</div>

<div class="col d-flex gap-5">
<a href="update.php?edit=<?php echo $em['id'];?>">Edit</a>
<a href="del.php?delete=<?php echo $em['id'];?>">cancel</a>
</div>
</diV>

<?php
}
?>

<div class="btn1">
<a href="./index.php">back home</a>
</div>
</div>



</body>
</html>