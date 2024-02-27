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
    <link rel="stylesheet" href="bootstrap3.css">
</head>
<body>
<form class="needs-validation" method="POST" action="index3.php" novalidate>
<div class="container rounded bg-light p-3">
  <div class="form-row">
   
    <div class="col-6">
      <input type="text" name="fname" class="form-control" placeholder="First name" required>
    </div>
    <div class="col-6">
      <input type="text" name="lname" class="form-control" placeholder="Last name" required>
    </div>

    <div class="col-6">
      <input type="text" name="gender" class="form-control" placeholder="Gender" required>
    </div>

    <div class="col-6">
      <input type="number" name="age" class="form-control" placeholder="Age" required>
    </div>

    <div class="col-6">
      <input type="text" name="email" class="form-control" placeholder="Email" required>
    </div>

    <div class="col-6">
      <input type="number" name="phno" class="form-control" placeholder="phonenumber" required>
    </div>

    <div class="col-6">
      <input type="date" name="checkin" class="form-control" required>
    </div>

    <div class="col-6">
      <input type="date" name="checkout" class="form-control" required>
    </div>


    
    </div>
    <div class="d-grid col-4 mx-auto">
  <button class="btn btn-danger" type="submit">Submit form</button>
</div>
  </div>
</form>

<script src="script2.js"></script>

</body>
</html>