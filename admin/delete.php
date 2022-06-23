<?php
require_once('../koneksi.php');
$insert= "DELETE FROM tambah WHERE id='$_GET[id]' ";
 if (mysqli_query($koneksi, $insert)) {
    	echo "<script>alert('Data berhasil diupdate @ $hari_ini.Terima Kasih')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        Echo "Data anda gagal diupdate. Ulangi sekali lagi".mysql_error();
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }
?>