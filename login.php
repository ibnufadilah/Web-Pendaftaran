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
    <title>Jual Beli Website</title>
</head>
<body>
    
  
              <?php
   session_start();
   if(isset($_SESSION['username']))
  
   require_once("koneksi.php");
?>
 <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3 class="text-center">Silahkan Masuk</h3>


                <form method="post" action="proseslogin.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
    <small id="emailHelp" class="form-text text-muted">Selalu Ingat username kamu</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-success">Login</button>
  <a href="register.php"  class="btn btn-primary">Daftar</a>
</form>
 
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>



<<!-- div id="footer">
  
  <br>  <br>  <br>  <br>  
      <h4>BIKIN WEB GARA - GARA TUGAS</h4>
    
</div> -->

    
</body>
</html>