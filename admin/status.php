<?php 

include'koneksi.php';

$id = $_POST['id'];
$status = $_POST['status'];


  $update=mysqli_query($koneksi,"UPDATE status SET
        status                = '$status'
       
        WHERE id='$id'");

  if ($update){
    echo "<script>alert('Data berhasil diupdate')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Data Gagal diupdate')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }

 ?>