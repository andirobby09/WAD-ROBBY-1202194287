<?php
    require 'Robby_functions.php';
    $buku = query("SELECT * FROM buku_table");
    $buku2 = mysqli_query($conn,"SELECT * FROM buku_table");
    $cek= mysqli_num_rows($buku2);
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
    <nav class="navbar navbar-extend-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand mb-0 h1">
              <img class="d-inline-block align-top" src="foto/logo-ead.png" height="40" />
            </a>
            <div>
              <a class="btn btn-primary" id="tambahbuku" type="button" href="Robby_tambahBuku.php">Tambah Buku</a>
            </div>
        </div>
    </nav>
    
    <?php
        if($cek == 0){
            echo "
            <div class='container' >
                <div class='container'>
                    <h2 class='text-center'>Belum Ada Buku</h2>
                    <hr style='height:3px;border-width:0;color:gray;background-color:aqua'>
                    <p class='text-center'>Silahkan Menambahkan Buku</p>
                </div>
            </div>";
        }else{
        ?>
            <div class="container">
                <div class="row">
                    <?php foreach($buku as $row): ?>
                        <div class="col-sm-3">
                            <div class="card mt-5" style="width: 15rem;">
                                <img src="foto/<?= $row["gambar"]; ?>" class="card-img-top" style="height: 17rem;">
                                <div class="card-body">
                                    <form action="Robby_detailBuku.php" method="POST">
                                        <h5 class="card-title"><?=$row["judul_buku"]; ?></h5>
                                        <p class="card-text"><?=$row["deskripsi"]; ?> </p>
                                        <input name="id" value="<?= $row["id_buku"]; ?>" hidden>
                                        <button class="btn btn-primary" type="submit" name="submit">Tampilkan lebih lanjut</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php
        }
    ?>
    <footer class="text-center mt-5">
        <img class="d-inline-block" src="logo-ead.png" height="40" />
        <h5>Perpustakaan EAD</h5>
        <p>&copy; Robby_1202194287</p>
    </footer>
</body>
</html>