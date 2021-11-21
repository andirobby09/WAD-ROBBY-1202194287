<?php
    require 'Robby_functions.php';
    $id = $_POST['id'];
    $buku = mysqli_query($conn, "SELECT * FROM buku_table WHERE id_buku=$id");
    $data2 = mysqli_fetch_array($buku);
    // data tag dari tabel buku
    $datatag=explode(', ', $data2['tag']);
    $databahasa = $data2['bahasa'];
    if (isset($_POST["simpan"])) {
        if (ubah($_POST) > 0 ){
            echo "<script>
                alert('Data Berhasil diubah!');
                document.location.href = 'Robby_home.php';
            </script>";
        } else{
            echo "<script>
                alert('Data Gagal diubah!');
                document.location.href = 'Robby_home.php';
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-extend-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="Robby_home.php" class="navbar-brand mb-0 h1">
              <img class="d-inline-block align-top" src="logo-ead.png" height="40" />
            </a>
            <div>
              <a class="btn btn-primary" type="button" href="#">Tambah Buku</a>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="container" style="width:40rem;">
            <div class="shadow-lg p-5 mb-5 bg-body rounded p-2">
                <h3 class="text-center mb-5">Detail Buku</h3>
                <?php foreach ($buku as $row) : ?>
                    <img src="foto/<?= $row["gambar"]; ?>" class="rounded mx-auto d-block" style="width: 20rem;" alt="foto">
                    <hr style="color:aqua">
                    <p class="fw-bold">Judul :</p>
                    <p><?= $row["judul_buku"]; ?></p>
                    <p class="fw-bold">Penulis :</p>
                    <p><?= $row["penulis_buku"]; ?></p>
                    <p class="fw-bold">Tahun Terbit :</p>
                    <p><?= $row["tahun_terbit"]; ?></p>
                    <p class="fw-bold">Deskripsi :</p>
                    <p><?= $row["deskripsi"]; ?></p>
                    <p class="fw-bold">Bahasa :</p>
                    <p><?= $row["bahasa"]; ?></p>
                    <p class="fw-bold">Tag :</p>
                    <p><?= $row["tag"]; ?></p>
                    <div class="row">
                        <div class="col">
                            <div class="d-grid gap-2">
                                <!--Button PopUp-->
                                <button type="button" class="btn btn-primary" id="ubah" name="ubah" data-bs-toggle="modal" data-bs-target="#popup" onclick="myFunction()">Sunting</button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-grid gap-2">
                                <a class="btn btn-danger" href="Robby_hapus.php?id= <?= $row["id_buku"]; ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Buku ?');">Hapus</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- PopUP--->
    <div class="modal fade" id="popup" tabindex="-1" aria-labelledby="judulPopup" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulPopup">Sunting</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="Robby_detailBuku.php" method="POST" enctype="multipart/form-data">
                        <?php foreach ($buku as $row) : ?>
                            <input type="hidden" name="id" value="<?= $row["id_buku"]; ?>">
                            <div class="mb-3">
                                <label for="judul_buku" class="form-label fw-bold">Judul Buku</label>
                                <input type="text" class="form-control" name="judul_buku" id="judul_buku" value="<?= $row["judul_buku"]; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="penulis_buku" class="form-label fw-bold">Penulis</label>
                                <input type="text" class="form-control" id="penulis_buku" value="<?= $row["penulis_buku"]; ?>" name="penulis_buku">
                            </div>
                            <div class="mb-3">
                                <label for="tahun_terbit" class="form-label fw-bold">Tahun Terbit</label>
                                <input type="text" class="form-control" id="tahun_terbit" value="<?= $row["tahun_terbit"]; ?>" name="tahun_terbit">
                            </div>
                            <div class="mb-3">
                            <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                            <textarea class="form-control" id="deskripsiTopUp" rows="3" name="deskripsi" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="bahasa" class="form-label fw-bold">Bahasa</label>
                                <div class="form-check form-check-inline ms-3">
                                    <input class="form-check-input" type="radio" id="indonesia" name="bahasa" value="Indonesia" <?php if($row['bahasa'] == "Indonesia") echo 'checked';?>>
                                    <label class="form-check-label" for="indonesia">Indonesia</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="lainnya" name="bahasa" value="Lainnya" <?php if($row['bahasa'] == "Lainnya") echo 'checked';?>>
                                    <label class="form-check-label" for="lainnya">Lainnya</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="tag" class="form-label fw-bold">Tag</label>
                                <div class="form-check form-check-inline ms-3">
                                    <input class="form-check-input" type="checkbox" id="pemrograman" name="tag[]" value="Pemrograman" <?php if(in_array("Pemrograman", $datatag)) echo "checked"?>>
                                    <label class="form-check-label" for="pemrograman">Pemrograman</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="website" name="tag[]" value="Website" <?php if(in_array("Website", $datatag)) echo "checked"?>>
                                    <label class="form-check-label" for="website">Website</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="java" name="tag[]" value="Java"<?php if(in_array("Java", $datatag)) echo "checked"?>>
                                    <label class="form-check-label" for="java">Java</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="oop" name="tag[]" value="OOP" <?php if(in_array("OOP", $datatag)) echo "checked"?>>
                                    <label class="form-check-label" for="oop">OOP</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="mvc" name="tag[]" value="MVC" <?php if(in_array("MVC", $datatag)) echo "checked"?>>
                                    <label class="form-check-label" for="mvc">MVC</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="kalkulus" name="tag[]" value="Kalkulus" <?php if(in_array("Kalkulus", $datatag)) echo "checked"?>>
                                    <label class="form-check-label" for="kalkulus">Kalkulus</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="lainnya" name="tag[]" value="Lainnya" <?php if(in_array("Lainnya", $datatag)) echo "checked"?>>
                                    <label class="form-check-label" for="lainnya">Lainnya</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan Perubahan</button>
                        </div>
                    <?php endforeach; ?>
                </form>
            </div>
        </div>
    </div>

    <footer class="text-center mt-5">
        <img class="d-inline-block" src="logo-ead.png" height="40" />
        <h5>Perpustakaan EAD</h5>
        <p>&copy; Robby_1202194287</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        function myFunction() {
            document.getElementById("deskripsiTopUp").value = "<?= $row["deskripsi"]; ?>";
        }
    </script>
</body>

</html>