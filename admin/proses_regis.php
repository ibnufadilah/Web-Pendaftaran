<?php
require_once('koneksi.php');





    echo "<pre>
        username                : $_POST[username]</br>
        password             : $_POST[password]</br>
      
    </pre";
    
    $insert="insert into login VALUES (NULL,'$_POST[username]','$_POST[password]')";
    if (mysqli_query($koneksi, $insert)) {
    	echo "<script>alert('Data berhasil diupdate @ $hari_ini.Terima Kasih')</script>";
        echo "<meta http-equiv='refresh' content='0; url=login.php'>";
    } else {
        Echo "Data anda gagal diupdate. Ulangi sekali lagi".mysql_error();
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }
?>
