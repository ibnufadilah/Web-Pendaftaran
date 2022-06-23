
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
                        <a class="nav-link" href="index.html">Home
                              <span class="sr-only">(current)</span>
                            </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="form_input.php">Input</a>
                      </li>
                     <!--  <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                      </li> -->
                      <li class="nav-item">
                        <a class="nav-link" href="logout.php">Keluar</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
              

             
<br>
<br>

    <div class="container">
      <h1 class="display-5" text align="center">DAFTAR SEMINAR IT</h1>
                        <br>
                        <br>
<table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Deskripsi</th>
                                                <th>Alamat</th>
                                                <th>Biaya</th>
                                                <th>Gambar</th>
                                                 <th>Action</th>
                                            </tr>
                                        </thead>
        <?php            
        require_once('../koneksi.php');
        $baca= "SELECT * FROM tambah order by ID desc";
        $tampil = mysqli_query($koneksi, $baca);
        if (mysqli_num_rows($tampil)>0) {
        
  
        while($row=mysqli_fetch_assoc($tampil)){
            echo"<tbody>
            <tr>
                <td>$row[id]</td>
                <td>$row[nama_seminar]</td>
                <td>$row[deskripsi]</td>
                <td>$row[alamat]</td>
                 <td>$row[biaya]</td>
                <td><img src='$row[gambar]' width='80' height='80'> : $row[gambar]</img></td>
                <td><a class='btn btn-danger' href=delete.php?id=$row[id]> delete</a><br><br><a class='btn btn-primary' href=form_edit.php?id=$row[id]> edit</a></td>
                
            </tr>
            </tbody>
            ";}}
            ?>
            </table
<div id="footer">
  
  <br>  <br>  <br>  <br>  
      <h4></h4>
    
</div>

    
</body>
</html>