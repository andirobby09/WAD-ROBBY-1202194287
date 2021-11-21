<?php
    require 'Robby_functions.php';
    // cek submit
    if (isset($_POST["submit"])){
        if (tambah($_POST) > 0 ){
            echo "<script>
                alert('Buku Berhasil ditambahkan!');
                document.location.href = 'Robby_home.php';
            </script>";
        } else{
            echo "<script>
                alert('Buku Gagal ditambahkan!');
                document.location.href = 'Robby_tambahBuku.php';
            </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-extend-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="Robby_home.php" class="navbar-brand mb-0 h1">
              <img class="d-inline-block align-top" src="foto/logo-ead.png" height="40" />
            </a>
            <div>
              <a class="btn btn-primary" type="button" href="#">Tambah Buku</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="container">
            <div class="shadow-lg p-3 mb-5 bg-body rounded p-2">
                <h3 class="text-center">Tambah Data Buku</h3>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="judul_buku" class="form-label fw-bold">Judul Buku</label>
                        <input type="text" class="form-control" name="judul_buku"  id="judul_buku" placeholder="Contoh: Pemrograman Web Bersama EAD" required>
                    </div>
                    <div class="mb-3">
                        <label for="penulis_buku" class="form-label fw-bold">Penulis</label>
                        <input type="text" class="form-control" id="penulis_buku" value="Robby_1202194287" name="penulis_buku" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="tahun_terbit" class="form-label fw-bold">Tahun Terbit</label>
                        <input type="text" class="form-control" id="tahun_terbit" placeholder="Contoh: 2005" name="tahun_terbit" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" rows="3" placeholder="Contoh: Buku ini menjelaskan tentang ..." name="deskripsi" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="bahasa" class="form-label fw-bold">Bahasa</label>
                        <div class="form-check form-check-inline ms-3">
                            <input class="form-check-input" type="radio" id="indonesia" name="bahasa" value="Indonesia">
                            <label class="form-check-label" for="indonesia">Indonesia</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="lainnya" name="bahasa" value="Lainnya">
                            <label class="form-check-label" for="lainnya">Lainnya</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tag" class="form-label fw-bold">Tag</label>
                        <div class="form-check form-check-inline ms-3">
                            <input class="form-check-input" type="checkbox" id="pemrograman" name="tag[]" value="Pemrograman">
                            <label class="form-check-label" for="pemrograman">Pemrograman</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="website" name="tag[]" value="Website">
                            <label class="form-check-label" for="website">Website</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="java" name="tag[]" value="Java">
                            <label class="form-check-label" for="java">Java</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="oop" name="tag[]" value="OOP">
                            <label class="form-check-label" for="oop">OOP</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="mvc" name="tag[]" value="MVC">
                            <label class="form-check-label" for="mvc">MVC</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="kalkulus" name="tag[]" value="Kalkulus">
                            <label class="form-check-label" for="kalkulus">Kalkulus</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="lainnya" name="tag[]" value="Lainnya">
                            <label class="form-check-label" for="lainnya">Lainnya</label>
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="gambar" class="form-label fw-bold">Gambar</label>
                        <input class="form-control" type="file" name="gambar" id="formFile" required>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto mb-5">
                        <button class="btn btn-primary" type="submit" name="submit">+ Tambah</button>
                    </div>
                </form>
            </div>    
        </div>
    </div>

    <footer class="text-center">
        <img class="d-inline-block" src="logo-ead.png" height="40" />
        <h5>Perpustakaan EAD</h5>
        <p>&copy; Robby_1202194287</p>
    </footer>
</body>
</html>