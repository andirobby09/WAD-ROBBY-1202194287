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
    <div class="container heading text-center">
        <div class="container bg-dark" id="text">Reserve your venue now!</div>
    </div>
    <!-- Get and Post -->
    <div class="container">
        <div class="container">
            <div class="row border p-2">
                <div class="col align-self-center" for="tes">
                    <?php if (isset($_POST['img'])): ?>
                      <img src="<?= $_POST['nama']?>" class="rounded mx-auto d-block" style="width: 30rem;" alt="foto">
                    <?php elseif (isset($_POST['img2'])): ?>
                      <img src="<?= $_POST['nama']?>" class="rounded mx-auto d-block" style="width: 30rem;" alt="foto">
                    <?php elseif (isset($_POST['img3'])): ?>
                      <img src="<?= $_POST['nama']?>" class="rounded mx-auto d-block" style="width: 30rem;" alt="foto">
                    <?php else: ?>
                      <img src="nusantarahall.jpeg" class="rounded mx-auto d-block" style="width: 30rem;">
                    <?php endif;?>
                </div>

                <div class="col">
                    <form action="mybooking.php" method="POST">
                      <!-- nama -->
                      <div class="mb-3">
                          <label for="inputnama" class="form-label">Name</label>
                          <input class="form-control" name="nama" type="text" value="robby_1202194287" disabled readonly id="inputnama">
                      </div>
                      <!-- tanggal -->
                      <div class="mb-3">
                          <label for="inputtanggal" class="form-label">Event Date</label>
                          <input type="date" class="form-control" id="inputtanggal" name="tgl" placeholder="mm/dd/yyyy">
                      </div>
                      <!-- waktu -->
                      <div class="mb-3">
                          <label for="inputwaktu" class="form-label">Start Time</label>
                          <input type="text" class="form-control" id="inputwaktu" name="waktu" placeholder="--:--:--">
                      </div>
                      <!-- durasi -->
                      <div class="mb-3">
                          <label for="inputdurasi" class="form-label">Duration (Hours)</label>
                          <input type="number" class="form-control" id="inputdurasi">
                      </div>
                      <!-- typegedung -->
                      <div class="mb-3">
                          <label for="inputtypegedung" class="form-label">Building Type</label>
                          <select class="form-select form-select-sm" name="tipe" aria-label=".form-select-sm example">
                          
                            <?php if (isset($_POST['img3'])): ?>
                              <option value="3">Choose..</option>
                              <option value="Nusantara Hall">Nusantara Hall</option>
                              <option value="Garuda Hall">Garuda Hall</option>
                              <option selected>Gedung Serba Guna  
                              </option>
                            <?php elseif (isset($_POST['img2'])): ?>
                              <option value="2">Choose..</option>
                              <option value="Nusantara Hall">Nusantara Hall</option>
                              <option selected>Garuda Hall</option>
                              <option value="3">Gedung Serba Guna</option>
                            <?php elseif (isset($_POST['img'])): ?>
                              <option value="1">Choose..</option>
                              <option selected>Nusantara Hall</option>
                              <option value="Garuda Hall">Garuda Hall</option>
                              <option value="3">Gedung Serba Guna</option>
                            <?php else: ?>
                              <option selected>Choose..</option>
                              <option value="Nusantara Hall">Nusantara Hall</option>
                              <option value="Garuda Hall">Garuda Hall</option>
                              <option value="Gedung Serba Guna">Gedung Serba Guna</option>
                            <?php endif;?>
                          </select>
                      </div>
                      <!-- nohp -->
                      <div class="mb-3">
                          <label for="inputnohp" class="form-label">Phone Number</label>
                          <input type="text" class="form-control" name="nohp" id="inputnohp">
                      </div>
                      <!-- service -->
                      <label for="inputnohp" class="form-label">Add Service(s)</label>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="service" value="Catering" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Catering / $700
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="service1"value="Decoration" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                          Decoration / $450
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="service2" value="Sound System" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                          Sound System / $250
                        </label>
                      </div>
                      <!-- Button -->
                      <div class="d-grid gap-2 mt-3">
                          <button class="btn btn-primary" type="submit" name="book">Book</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<footer class="text-center">Created by: Robby_1202194287</footer>
</html>