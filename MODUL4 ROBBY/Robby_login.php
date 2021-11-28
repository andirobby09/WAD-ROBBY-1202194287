<?php
    session_start();
    require "Robby_functions.php";

    // cek cookie
    if(isset($_COOKIE['login'])){
        if ($_COOKIE['login'] == 'true'){
            $_COOKIE['login'] = true;
        }
    }
    // cek cookie
    if(isset($_SESSION['login'])){
        header("Location: index.php");
        exit;
    }
    // ambil dari register
    if(isset($_POST["register"])){
        registerasi($_POST);
    }
    // login
    if (isset($_POST['login'])){
        if(isset($_POST['email'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $sql = mysqli_query($conn,"SELECT * FROM user WHERE email='".$email."' AND password='".$password."' limit 1");
            
            if(mysqli_num_rows($sql)==1){
                $_SESSION["login"] = $email;

                // cek remember
                if(isset($_POST['remember'])){
                    setcookie('id', hash('sha256', $_POST['email']), time() + 1440);
                    setcookie('key', hash('sha256', $_POST['password']), time() + 1440);
                }
                header("Location: index.php");
                exit();
            } 
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>
<body style="background: #FEF8E7;">
    <nav class="navbar navbar-expand-lg navbar-light" style="background: #7DB1FF;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">EAD Travel</a>
            <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="Robby_register.php">Registrasi</a>
                <a class="nav-link active" href="#">Login</a>
            </div>
        </div>
    </nav>

    <?php if(isset($_POST["register"])):?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil Register</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif;?>
    <?php if(isset($error)): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Login Gagal</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif;?>
    <div class="container mt-5">
        <div class="row content d-flex justify-content-center align-items-center">
            <div class="col-md-5">
                <div class="box shadow bg-white p-4">
                    <h4 class="text-center">Login</h4>
                    <hr>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email"  id="email" placeholder="Masukkan Alamat E-Mail" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" name="password"  id="password" placeholder="Kata Sandi Anda" required>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary btn-lg border-0 px-5" type="submit" name="login">Login</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <p>Anda belum punya akun? <a href="Robby_register.php">Register</a></p>
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
<footer class="text-center mt-4 p-2" style="background-color: #7DB1FF;">
    <p class="mt-2">&copy;2021 Copyright:
        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" href=""> Robby_1202194287</a>
    </p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>