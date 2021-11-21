<?php
    $conn = mysqli_connect("localhost","root","","modul3");

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

    function tambah($data){
        global $conn;
        // cek tombol submit
        $judul = $data["judul_buku"];
        $penulis = $data["penulis_buku"];
        $tahun = $data["tahun_terbit"];
        $deskripsi = $data["deskripsi"];
        $tag = implode(", ", $data["tag"]);
        $bahasa = $data["bahasa"];

        // upload gambar
        $gambar = upload();
        if (!$gambar){
            return false;
        }
        // memasukkan data
        $query = "INSERT INTO buku_table VALUES
                ('', '$judul', '$penulis', '$tahun', '$deskripsi', '$gambar', '$tag', '$bahasa') ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

    }
    
    // hapus data
    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM buku_table WHERE id_buku='$id'");
        
        return mysqli_affected_rows($conn);
    }
    
    function ubah($data){
        global $conn;
        // cek tombol submit
        $id = $data['id'];
        $judul = $data['judul_buku'];
        $penulis = $data['penulis_buku'];
        $tahun = $data['tahun_terbit'];
        $deskripsi = $data['deskripsi'];
        $tag = implode(", ", $data["tag"]);
        $bahasa = $data['bahasa'];

        //update data
        $query = "UPDATE buku_table SET
                judul_buku = '$judul',
                penulis_buku = '$penulis',
                tahun_terbit = '$tahun',
                deskripsi = '$deskripsi',
                tag = '$tag',
                bahasa = '$bahasa'
                WHERE id_buku= $id";

        mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    }

    function upload(){
        $namafile = $_FILES['gambar']['name'];
        $ukuranfile = $_FILES['gambar']['size'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        // cek size file
        if ($ukuranfile > 1000000){
            echo "<script>
                alert('Ukuran Gambar Terlalu Besar');
            </script>";
        };

        move_uploaded_file($tmpName, 'foto/' . $namafile);
        return $namafile;
    }
?>