<!DOCTYPE htm l>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Document</title>
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container justify-content-center">
        <div id="navbarNav">
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="booking.php">Booking</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Heading-->
    <div class="heading text-center">
      <h5>WELCOME TO ESD VENUE RESERVATION</h5>
      <div class="container bg-dark" id="text">Find your best deal for your event, here!</div>
    </div>
    <!--Card-->
    <div class="gedung">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="card" style="width: 22rem;">
              <img src="nusantarahall.jpeg" class="card-img-top" height="200">
              <div class="card-body">
                <h5 class="card-title">Nusantara Hall</h5>
                <p class="card-text">$2000 / Hour<br>5000 Capacity</p>
              </div>
              <ul class="list-group list-group-flush text-center">
                <li class="list-group-item fw-bold text-success">Free Parking</li>
                <li class="list-group-item fw-bold text-success">Full AC</li>
                <li class="list-group-item fw-bold text-success">Cleaning Service</li>
                <li class="list-group-item fw-bold text-success">Covid-19 Health Protocol</li>
              </ul>
              <div class="card-body text-center">
                <form action="mybooking.php" method="POST">
                  <input name="img" value="nusantarahall.jpeg" hidden>
                  <button class="btn btn-primary" type="submit">Book now</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card" style="width: 22rem;">
              <img src="garudahall.jpg" class="card-img-top" height="200" >
              <div class="card-body">
                <h5 class="card-title">Garuda Hall</h5>
                <p class="card-text">$1000 / Hour<br>2000 Capacity</p>
              </div>
              <ul class="list-group list-group-flush text-center">
                <li class="list-group-item fw-bold text-success">Free Parking</li>
                <li class="list-group-item fw-bold text-success">Full AC</li>
                <li class="list-group-item fw-bold text-danger">No Cleaning Service</li>
                <li class="list-group-item fw-bold text-success">Covid-19 Health Protocol</li>
              </ul>
              <div class="card-body text-center">
                <form action="booking.php" method="POST">
                  <input name="img2" value="garudahall.jpg" hidden>
                  <button class="btn btn-primary" type="submit">Book now</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card" style="width: 22rem;">
              <img src="gedungserbaguna.jpg" class="card-img-top" height="200">
              <div class="card-body">
                <h5 class="card-title">Gedung Serba Guna</h5>
                <p class="card-text">$500 / Hour<br>500 Capacity</p>
              </div>
              <ul class="list-group list-group-flush text-center">
                <li class="list-group-item fw-bold text-danger">No Free Parking</li>
                <li class="list-group-item fw-bold text-danger">No Full AC</li>
                <li class="list-group-item fw-bold text-danger">No Cleaning Service</li>
                <li class="list-group-item fw-bold text-success">Covid-19 Health Protocol</li>
              </ul>
              <div class="card-body text-center">
                <form action="booking.php" method="POST">
                  <input name="img3" value="gedungserbaguna.jpg" hidden>
                  <button class="btn btn-primary" type="submit">Book now</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <footer class="text-center">Created by: Robby_1202194287</footer>
</html>
