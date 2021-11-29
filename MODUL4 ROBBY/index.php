<?php
    session_start();
    require 'Robby_functions.php';

    if (isset($_POST["tiket"])){
        if (tiket($_POST) > 0 ){
            echo "<script>
                alert('Buku Berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
        } else{
            var_dump(mysqli_affected_rows($conn));
            var_dump(mysqli_error($conn));;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
</head>
<body style="background: #FEF8E7;">

    <?php if(isset($SESSION["login"])):?>
        <nav class="navbar navbar-expand-lg navbar-light" style="background: #7DB1FF;">
            <div class="container">
                <a class="navbar-brand fw-bold" href="index.php">EAD Travel</a>
                <div class="navbar-nav">
                <div class="dropdown">
                    <a class="btn" href="Robby_booking.php"><i class="bi bi-cart-fill"></i></a>
                    <a class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" href="">
                        Pengaturan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <form action="Robby_profile.php" method="POST">
                            <li><button type="submit" class="dropdown-item" name="submit">Profile</button></li>
                        </form>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Login Berhasil</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php else: ?>
        <nav class="navbar navbar-expand-lg navbar-light" style="background: #7DB1FF;">
            <div class="container">
                <a class="navbar-brand fw-bold" href="index.php">EAD Travel</a>
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="Robby_register.php">Registrasi</a>
                    <a class="nav-link" href="Robby_login.php">Login</a>
                </div>
                </div>
            </div>
        </nav>
    <?php endif; ?>

    <div class="container text-center p-2">
        <h1 class="p-5 fw-bold" style="background: #91C2A1;">EAD Travel</h1>
    </div>
    <!--Cards-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width:fit-content">
                    <img src="foto/raja-ampat.jpeg" class="card-img-top" style="height: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">Raja Ampat, Papua</h5>
                        <p class="card-text">Kepulauan Raja Ampat merupakan rangkaian empat gugusan pulau yang berdekatan dan berlokasi di barat bagian Kepala Burung Pulau Papua. Secara administrasi, gugusan ini berada di bawah Kabupaten Raja Ampat, Provinsi Papua Barat.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item fw-bold">Rp. 7.000.000</li>
                    </ul>
                    <div class="card-body d-grid">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalrajaampat">Pesan Tiket</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width:fit-content">
                    <img src="foto/bromo.jpg" class="card-img-top" style="height: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">Gunung Bromo, Malang</h5>
                        <p class="card-text">Gunung Bromo atau dalam bahasa Tengger dieja "Brama", adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item fw-bold">Rp. 2.000.000</li>
                    </ul>
                    <div class="card-body d-grid">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalbromo">Pesan Tiket</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width:fit-content">
                    <img src="foto/tanahlot.jpg" class="card-img-top" style="height: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">Tanah Lot, Bali</h5>
                        <p class="card-text">Pura Tanah Lot adalah salah satu Pura yang sangat disucikan di Bali, Indonesia. Di sini ada dua pura yang terletak di atas batu besar. Satu terletak di atas bongkahan batu dan satunya terletak di atas tebing mirip dengan Pura Uluwatu.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item fw-bold">Rp. 5.000.000</li>
                    </ul>
                    <div class="card-body d-grid">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modallot">Pesan Tiket</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal tiket raja ampat -->
    <div class="modal fade" id="modalrajaampat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="POST">
            <div class="modal-body">
                <label for="inputtanggal" class="form-label">Tanggal Perjalanan</label>
                <input name="nama_tempat" value="Raja Ampat" hidden>
                <input name="lokasi" value="Papua" hidden>
                <input name="harga" value="Rp. 7.000.000" hidden>
                <input type="date" class="form-control" id="inputtanggal" name="tanggal" placeholder="mm/dd/yyyy">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="tiket">Tambahkan</button>
            </div>
            </form>
        </div>
      </div>
    </div>
    <!-- Modal tiket bromo -->
    <div class="modal fade" id="modalbromo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="POST">
            <div class="modal-body">
                <label for="inputtanggal" class="form-label">Tanggal Perjalanan</label>
                <input name="nama_tempat" value="Raja Ampat" hidden>
                <input name="lokasi" value="Papua" hidden>
                <input name="harga" value="Rp. 7.000.000" hidden>
                <input type="date" class="form-control" id="inputtanggal" name="tanggal" placeholder="mm/dd/yyyy">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="tiket">Tambahkan</button>
            </div>
            </form>
        </div>
      </div>
    </div>
    <!-- Modal tiket lot -->
    <div class="modal fade" id="modallot" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="POST">
            <div class="modal-body">
                <label for="inputtanggal" class="form-label">Tanggal Perjalanan</label>
                <input name="nama_tempat" value="Raja Ampat" hidden>
                <input name="lokasi" value="Papua" hidden>
                <input name="harga" value="Rp. 7.000.000" hidden>
                <input type="date" class="form-control" id="inputtanggal" name="tanggal" placeholder="mm/dd/yyyy">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="tiket">Tambahkan</button>
            </div>
            </form>
        </div>
      </div>
    </div>

    <!--Modal Footer-->
    <div class="modal fade" id="modalfooter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Created By</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Nama &nbsp;: Andi Robby Awaluddin</p>
            <p>NIM &emsp;: 1202194287</p>
        </div>
        </div>
      </div>
    </div>
</body>
<footer class="text-center mt-4 p-1" style="background-color: #7DB1FF;">
    <p class="mt-2">&copy;2021 Copyright:
        <a type="button" data-bs-toggle="modal" data-bs-target="#modalfooter" href=""> Robby_1202194287</a>
    </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>