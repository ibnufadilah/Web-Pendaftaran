<!DOCTYPE html>
 <?php            
        require_once('koneksi.php');
        $baca= "SELECT * FROM tambah where id='$_GET[id]'";
        $tampil = mysqli_query($koneksi, $baca);
        $row=mysqli_fetch_array($tampil);
        ?>
<html>
<head>
    
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../assets/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

    <script src="../assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-3.2.1.js"></script>

    <title>CETAK BROSUR</title>
</head>
<body style="padding: 0px 100px 100px 100px;">

    <div class="container-fluid">
   <h1 class="mt-4" style="text-align: center;">Data Seminar</h1>
    <hr>
    <br>
    <div class="row">
        <div class="col-md-8">
            <table>
          <tr>
                  <th>Nama</th>
                  <td> : </td>
                  <td><?php echo "$row[nama_seminar]"; ?></td>
                </tr>
                <tr>
                  <th>Deskripsi</th>
                  <td> : </td>
                  <td><?php echo "$row[deskripsi]"; ?></td>
                </tr>
                <tr>
                  <th>Alamat</th>
                  <td> : </td>
                  <td><?php echo "$row[alamat]"; ?></td>
                </tr>
                <tr>
                  <th>Deskripsi</th>
                  <td> : </td>
                  <td><?php echo "$row[biaya]"; ?></td>
                </tr>
        </table>
        </div>

        <div class="col-md-4">
            <img src="admin/<?php echo $row['gambar']; ?>">
        </div>
    </div>
    <hr>

   
      

    </div>

</body>
</html>
    <script>
        window.print();
    </script>