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
    <title>Education SEMINAR</title>
</head>
<body>
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container">
                  <a class="navbar-brand" href="index.php">Education SEMINAR</a>
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
              

              <header>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item active" style="background-image: url('img/seminar1.jpg');">
                      <div class="carousel-caption d-none d-md-block">
                        <h3 class="display-4">Selamat Datang Di Website Education SEMINAR</h3>
                        <p class="lead">Menyediakan Berbagai Info Seminar Seputar IT</p>
                      </div>
                    </div>
                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('img/aseminar2.jpg')">
                      <div class="carousel-caption d-none d-md-block">
                        <h3 class="display-4">Temukan kemudahan mencari Seminar IT</h3>
                        <p class="lead">Hanya Di Education SEMINAR.</p>
                      </div>
                    </div>
                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('img/aseminar3.jpg')">
                      <div class="carousel-caption d-none d-md-block">
                        <h3 class="display-4">Banyak Pilihan SEMINAR IT</h3>
                        <p class="lead">Kunjungi Kami Sekarang.</p>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                </div>
              </header>
  <!--       <?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
      echo "Login gagal! username dan password salah!";
    }else if($_GET['pesan'] == "logout"){
      echo "Anda telah berhasil logout";
    }else if($_GET['pesan'] == "belum_login"){
      echo "Anda harus login untuk mengakses halaman admin";
    }
  }
  ?> -->
<br>
<br>

    <div class="container">
      <h1 class="display-5" text align="center">SEMINAR IT DALAM WAKTU DEKAT</h1>
                        <br>
                        <br>

        


        <div class="row">
          <?php            
          require_once('koneksi.php');
          $baca= "SELECT * FROM tambah order by ID desc LIMIT 5";
          $tampil = mysqli_query($koneksi, $baca);
          if (mysqli_num_rows($tampil)>0) {
          
    
          while($row=mysqli_fetch_assoc($tampil)){
              $desc = substr($row['deskripsi'], 0,90);
          echo "
            <div class='col-md-3'>
                <div class='card'>
                    <img src='admin/$row[gambar]' width='auto' height='160' class='card-img-top' alt='...''>
                    <div class='card-body'>
                      <h5 class='card title'>$row[nama_seminar]</h5>
                      <p class='card-text'>$desc ....</p>
                    </div>
                    <a href='content.php?id=$row[id]' class='btn btn-success'>Visit</a>
                </div>
            </div>
        
        ";}} ?>
      </div>
    </div>

    <br>
    <br>
<div id="footer" >
  
  <br>  <br>  <br>  <br>  
      <h4>BIKIN WEB GARA - GARA TUGAS</h4>
    
</div>

    
</body>
</html>