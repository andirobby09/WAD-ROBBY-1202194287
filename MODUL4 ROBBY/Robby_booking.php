<?php
    require 'Robby_functions.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background: #FEF8E7;">
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
                        <input name="id" value="<?= $row["id"]; ?>" hidden>
                        <li><button type="submit" class="dropdown-item" name="submit">Profile</button></li>
                    </form>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 bg-light border rounded">
        <table class="table table-striped mt-2">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Tempat</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Tanggal Perjalanan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button type="button" class="btn btn-danger btn-sm">Hapus</button></td>
                </tr>
                <tr>
                </tr>
            </tbody>
        </table>
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
<footer class="text-center mt-4 p-1 fixed-bottom" style="background-color: #7DB1FF;">
    <p class="mt-2">&copy;2021 Copyright:
        <a type="button" data-bs-toggle="modal" data-bs-target="#modalfooter" href=""> Robby_1202194287</a>
    </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>