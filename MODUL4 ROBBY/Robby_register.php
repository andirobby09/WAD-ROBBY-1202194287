<?php
    require "Robby_functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Register</title>
</head>
<body style="background: #FEF8E7;">
    <nav class="navbar navbar-expand-lg navbar-light" style="background: #7DB1FF;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">EAD Travel</a>
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Registrasi</a>
                <a class="nav-link" href="Robby_login.php">Login</a>
            </div>
            </div>
        </div>
    </nav>

    </div>
    <div class="container mt-5">
        <div class="row content d-flex justify-content-center align-items-center">
            <div class="col-md-5">
                <div class="box shadow bg-white p-4">
                    <h4 class="text-center">Register</h4>
                    <hr>
                    <form action="Robby_login.php" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama"  id="nama" placeholder="Masukkan Nama Lengkap" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email"  id="email" placeholder="Masukkan Alamat E-Mail" required>
                        </div>
                        <div class="mb-3">
                            <label for="nohp" class="form-label">Nomor Handphone</label>
                            <input type="text" class="form-control" name="nohp"  id="nohp" placeholder="Masukkan Nomor Handphone" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" name="password"  id="password" placeholder="Kata Sandi Anda" required>
                        </div>
                        <div>
                            <label for="password2" class="form-label">Konfirmasi Kata Sandi</label>
                            <input type="password" class="form-control" name="password2"  id="password2" placeholder="Konfirmasi Kata Sandi Anda" required>
                        </div>
                        <hr>
                        <div class="text-center">
                            <button class="btn btn-primary btn-lg border-0 px-5" type="submit" name="register">Daftar</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <p>Anda sudah punya akun? <a href="Robby_login.php">Login</a></p>
                    </div>
                </div>
            </div>
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