<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="bootstrap1.css">
    <title>Document</title>


</head>
<body>
<nav class="navbar navbar-default navbar-expand-lg navbar-light bg-light p-1">
  <div class="container">
  <img src="./images/hotel lg.jpg" alt="" width=100>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
    <ul class="nav navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./index4.php">Book Review</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Booking">Gallery</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="./datatable.php">Coupon</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa-solid fa-headset"></i> Support</a>
      </li>   
    </ul> 
  </div>
  </div>
</nav>

<section class="home position-relative z-0">
    <div class="home1 position-absolute top-50 start-50 translate-middle">
<form class="d-flex flex-wrap" action="index1.php">
<div class="home1 d-flex flex-wrap bg-light w-100">
<div class="form-group">
    <label for="location">Location</label>
    <select class="form-control" id="location" required>
      <option>Bangalore</option>
      <option>Mumbai</option>
      <option>Hyderabad</option>
      <option>Chennai</option>
      <option>Delhi</option>
    </select>
  </div>
  <div class="form-group">
    <label for="checkin">checkin</label>
    <input type="date" class="form-control" id="checkin" required>
  </div>
  <div class="form-group">
    <label for="checkout">Checkout</label>
    <input type="date" class="form-control" id="checkout" required>
  </div>

  <div class="form-group">
    <label for="rooms">Rooms&Guest</label>
    <select class="form-control" id="rooms" required>
      <option>1 Rooms & 2 Guest</option>
      <option>2 Rooms & 4 Guest</option>
      <option>3 Rooms & 9 Guest</option>
      <option>4 Rooms & 6 Guest</option>
    </select>
  </div>
  
  </div>
  
  <div class="d-grid col w-100">
  <button class="btn btn-primary" name="submit" type="submit">Book Now</button>
</div>

</form>
</div>
</section>

<section class="offer p-5">
  <div class="container">
  <div class="off-hd mb-4">
            <h1>Exclusive Offers</h1>
  </div>
<div class="row gap-2 d-flex w-100">
    <div class="col">
    <img src="./images/easeday14apr23-hp.png" height=150>
    <div class="hd">
        <h3>Deal of the Day</h3>
        <p>Enjoy Different Deal Each Day with EaseMyTrip</p>
        <a href="./datatable.php"><input type="button" value="Offer"></a>
    </div>
    </div>
    <div class="col">
    <img src="./images/emtgoa-25apr-hp2.png" height=150>
    <div class="hd">
      <h3>Deal of the Day</h3>
      <p>Enjoy Different Deal Each Day with EaseMyTrip</p>
      <a href="./datatable.php"><input type="button" value="Offer"></a>
      </div>
    </div>
    <div class="col">
    <img src="./images/streling-12apr23-hp.png" height=150>
    <div class="hd">
      <h3>Deal of the Day</h3>
      <p>Enjoy Different Deal Each Day with EaseMyTrip</p>

    </div>
    </div>
  </div>

  </div>
</section>

<section class="Booking p-5" id="Booking">
  <div class="container">
        <div class="booking-hd mb-4">
            <h1>Book Hotels at Popular Destinations</h1>
        </div>
        <div class="booking-container d-flex flex-wrap">
            <div class="col">
                <img src="./images/bangalore.png">
                <h2>Bangaluru</h2>
                <span>starting at &#8377 499</span>
            </div>
            <div class="col">
                <img src="./images/bangkok.png">
                <h2>Bangkok</h2>
                <span>starting at &#8377 499</span>
            </div>
            <div class="col">
                <img src="./images/Delhi.png">
                <h2>New Delhi</h2>
                <span>starting at &#8377 499</span>
            </div>
            <div class="col">
                <img src="./images/goa.png">
                <h2>Goa</h2>
                <span>starting at &#8377 499</span>
            </div>
            <div class="col">
                <img src="./images/Kolkata.png">
                <h2>Kolkata</h2>
                <span>starting at &#8377 499</span>
            </div>
        </div>

  </div>
</section>


<section class="bg">
  <div class="container">
        <div class="bg-img">
            <img src="./images/crowne-plaza-tamuning-8691101738-16x5.jpeg">
        
        <div class="bg-txt">
            <h1>Cheapest Deals on Budget & Luxury Hotels are Available at INTOURIST</h1>
            <p>Due to the huge influx of tourists in India, EaseMyTrip offers a wide range of luxury, deluxe and budget hotels to them. Choose to stay in luxury and comfort with the greatest discounts available on hotel bookings.
                <br><br>
                We list the classiest budget hotels on our site along with some of the prominent international hotel chains of India including Oberoi Group, ITC Group, Taj Group, Le Meridian Group and many others. Ranging from class hotels to luxury beach resorts, each hotel on our site gives you a memorable staying experience. Along with deluxe, budget and luxury hotels, EaseMyTrip also displays a number of heritage hotels that offer you a royal stay. Enjoy cheap hotel deals for any destination with great savings.</p>
        </div>
        </div>
  </div>
    </section>

</div>
  <footer class="bg-dark text-center text-white">
 
  <div class="text-center p-3">
    Copyright &copy 2024 JP
  </div>
</footer>
  

</body>
</html>