<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Education Seminar</title>
</head>
<body>
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container">
                  <a class="navbar-brand" href="#">Education SEMINAR</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home
                             
                            </a>
                      </li>
                     
                      <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="login.php">Masuk</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
              

             
        <?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
      echo "Login gagal! username dan password salah!";
    }else if($_GET['pesan'] == "logout"){
      echo "Anda telah berhasil logout";
    }else if($_GET['pesan'] == "belum_login"){
      echo "Anda harus login untuk mengakses halaman admin";
    }
  }
  ?>
<br>
<br>

    <div class="container">
      <h1 class="display-5" text align="center">SEMINAR IT DALAM WAKTU DEKAT</h1>
                        <br>
                        <br>

        


        <div class="row">
           <?php            
        require_once('koneksi.php');
        $baca= "SELECT * FROM tambah where id='$_GET[id]'";
        $tampil = mysqli_query($koneksi, $baca);
        $row=mysqli_fetch_array($tampil);
        $id = $row['id'];
        ?>
            <div class='col-md-6'>
                <div class='img-thumbnail'>
                    <img src='admin/<?php  echo "$row[gambar]"; ?>'  class='card-img-top' alt='...''>
                </div>
            </div>
            <div class="col-md-6">
            	<table class="table table-responsive table-hover">
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
                <a href="" class="btn btn-primary btn-md header_kanan" 
onclick="window.open('cetak_kartu.php?id=<?php echo $id ?>', 'newwindow','width=800,height=500'); 
              return false;">
<span class="fa fa-print fa-fw"></span>Cetak Kartu</a>

            	</table>
            </div>
        
      </div>
    </div>

    <br>
    <br>
<div id="footer" style="position: fixed;">
  
  <br>  <br>  <br>  <br>  
      <h4>BIKIN WEB GARA - GARA TUGAS</h4>
    
</div>

    
</body>
</html>