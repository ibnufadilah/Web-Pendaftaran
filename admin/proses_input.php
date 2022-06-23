<?php
require_once('../koneksi.php');



$lokasi_file=$_FILES['gambar']['tmp_name'];
$nama_file=$_FILES['gambar']['name'];
move_uploaded_file($lokasi_file,"$nama_file");

    echo "<pre>
        nama_seminar                : $_POST[nama_seminar]</br>
        deskripsi               : $_POST[deskripsi]</br>
        alamat                : $_POST[alamat]</br>
        biaya               :  $_POST[biaya]</br
        gambar       : $nama_file
    </pre";
    
    $insert="insert into tambah VALUES (NULL,'$_POST[nama_seminar]','$_POST[deskripsi]','$_POST[alamat]','$_POST[biaya]','$nama_file')";
    if (mysqli_query($koneksi, $insert)) {
    	echo "<script>alert('Data berhasil diupdate @ $hari_ini.Terima Kasih')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        Echo "Data anda gagal diupdate. Ulangi sekali lagi".mysql_error();
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }
?>
