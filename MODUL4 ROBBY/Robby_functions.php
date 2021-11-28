<?php
    $conn = mysqli_connect("localhost","root","","wad_modul4");

    // mengambil semua data
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    // Menambah data Register
    function registerasi($data){
        global $conn;
        // cek tombol submit
        $nama = $data["nama"];
        $email = $data["email"];
        $password = $data["password"];
        $password2 = $data["password2"];
        $nohp = $data["nohp"];

        // Cek email
        $dataemail = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email' ");
        if (mysqli_fetch_row($dataemail)){
            echo "<script>
                alert('Email sudah terdaftar');
                document.location.href = 'Robby_register.php';
            </script>";
            return false;
        }

        // Cek password
        if ($password == $password2){
            // memasukkan data
            $query = "INSERT INTO user VALUES
                    ('', '$nama', '$email', '$password', $nohp) ";
            $result = mysqli_query($conn, $query);

        } else{
            echo "<script>
                alert('Konfirmasi Passwordnya Tidak Sama');
                document.location.href = 'Robby_register.php';
            </script>";
        }

        return mysqli_affected_rows($conn);
    }

    // tambah tiket
    function tiket($data){
        global $conn;

        // ambil user_id
        $iduser = $_SESSION["login"];
        $ambilid = mysqli_query($conn, "SELECT id FROM user WHERE email='$iduser'");
        $user_id = mysqli_fetch_array($ambilid);
        $nama_tempat = $data['nama_tempat'];
        $lokasi = $data['lokasi'];
        $harga = $data['harga'];
        $tanggal = $data['tanggal'];

        $query = "INSERT INTO bookings VALUES
                ('', '$user_id', '$nama_tempat', '$lokasi', '$harga', '$tanggal') ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

?>