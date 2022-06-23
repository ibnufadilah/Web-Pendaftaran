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
    <title>EDUCATION SEMINAR</title>
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
                              <span class="sr-only">(current)</span>
                            </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="form_input.php">Input</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                      </li> -->
                      <li class="nav-item">
                        <a class="nav-link" href="logout.php">Keluar</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
              

             
<br><br><br>
<br>
<div class="container">
   <form action="proses_input.php" method="post" enctype="multipart/form-data">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Seminar</label>
    <div class="col-sm-10">
      <input name="nama_seminar" type="text" class="form-control" id="inputEmail3" placeholder="Masukkan Nama Seminar">
    </div>
  </div>

 <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi Seminar</label>
    <div class="col-sm-10">
      <input name="deskripsi" type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Deskripsi Seminar">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat Seminar</label>
    <div class="col-sm-10">
      <input name="alamat" type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Alamat Seminar">
    </div>
  </div>

 <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Biaya Seminar</label>
    <div class="col-sm-10">
      <input name="biaya" type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Biaya Seminar">
    </div>
  </div>



<div class="custom-file">
    <input name="gambar" accept="image/*" type="file" class="custom-file-input" id="validatedCustomFile" required>
    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
  </div>

  

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>
    <br>
    <br>

<!-- 
<div id="footer">
  
  <br>  <br>  <br>  <br>  
      <h4>BIKIN WEB GARA - GARA TUGAS </h4>
    
</div> -->

    
</body>
</html>



