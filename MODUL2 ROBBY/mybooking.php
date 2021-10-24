<?php 
if( !isset($_POST["submit"])){
    header("Location: index.php");
    exit;
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
      <h5 class="fw-normal fs-5">Thank you robby_1202194287 for Reserving</h5>
      <p>Please double check your reservation details</p>
    </div>
    
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Check-in</th>
                    <th scope="col">Check-out</th>
                    <th scope="col">Building Type</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Service</th>
                    <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- noboking -->
                    <th scope="row"><?= rand(1,10000) ?></th>
                    <!-- nama -->
                    <td>robby_1202194287</td>
                    <!-- checkin -->
                    <td><?= $_POST["tgl"];?> <?= $_POST["waktu"]; ?></td>
                    <!-- checkout -->
                    <td></td>
                    <!-- tipe -->
                    <td><?= $_POST["tipe"];?></td>
                    <!-- nohp -->
                    <td><?= $_POST["nohp"];?></td>
                    <!-- service -->
                    <td></td>
                    <!-- totalharga -->
                    <td></td>
                </tr>
            </tbody>
    
        </table>
    </div>
</body>
<footer class="text-center fixed-bottom">Created by: Robby_1202194287</footer>
</html>