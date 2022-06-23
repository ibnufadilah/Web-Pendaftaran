<?php
require_once('../koneksi.php');


$id = $_POST['id'];

$lokasi_file=$_FILES['gambar']['tmp_name'];
$nama_file=$_FILES['gambar']['name'];
move_uploaded_file($lokasi_file,"$nama_file");

       $nama_seminar       = $_POST['nama_seminar'];
        $deskripsi          = $_POST['deskripsi'];
        $alamat             = $_POST['alamat'];
        $biaya              =  $_POST['biaya'];
        $gambar             = $nama_file;

    // echo "<pre>
    //     nama_seminar                : $_POST[nama_seminar];
    //     deskripsi               : $_POST[deskripsi];
    //     alamat                : $_POST[alamat];
    //     biaya               :  $_POST[biaya]</br
    //     gambar       : $nama_file
    // </pre";
    
    $update=mysqli_query($koneksi,"UPDATE tambah SET
        nama_seminar                = '$nama_seminar',
        deskripsi               = '$deskripsi',
        alamat                = '$alamat',
        biaya               =  '$biaya',
        gambar       = '$nama_file'
        WHERE id='$id'");
     
    if ($update){
    echo "<script>alert('Data berhasil diupdate')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Data Gagal diupdate')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }
?>
