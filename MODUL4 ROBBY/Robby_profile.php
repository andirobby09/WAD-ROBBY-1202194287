<?php
    require 'Robby_functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Profile</title>
</head>
<body style="background: #FEF8E7;">
    <nav class="navbar navbar-expand-lg navbar-light" style="background: #7DB1FF;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">EAD Travel</a>
            <div class="navbar-nav">
            <div class="dropdown">
                <button class="btn"><i class="bi bi-cart-fill"></i></button>
                <a class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" href="">
                    Pengaturan
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    
    <div class="container mt-5">
        <div class="border border-1 rounded bg-light p-4">
            <h4 class="text-center">Profile</h4>
            <form action="" method="POST">
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama"  id="nama">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nohp" class="col-sm-2 col-form-label">Nomor Handphone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nohp"  id="nohp">
                    </div>
                </div>
                <hr>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Kata Sandi</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="nama"  id="nama" placeholder="Kata Sandi">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nohp" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="nohp"  id="nohp" placeholder="Konfirmasi Kata Sandi">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nohp" class="col-sm-2 col-form-label">Warna Navbar</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Blue Ocean</option>
                            <option value="1">Black</option>
                            <option value="3">Grey</option>
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary border-0 px-4" type="submit" name="simpan">Simpan</button>
                    <button class="btn btn-warning border-0 px-4" type="button" name="simpan">Cancel</button>
                </div>
            </form>
        </div>
    </div>


    <!--Modal-->
    <<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" href=""> Robby_1202194287</a>
    </p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>