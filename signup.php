
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Sigup for Join</title>

    

    
    <link href="css/bootstrap.min.css" rel="stylesheet">

  
    <link href="css/signup.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form action="" method="post" >
        <h2 class="form-signup-heading">Please signup</h2>
        <label for="nama" class="sr-only">Nama Lengkap</label>
        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required >
       
        <label for="tanggal_lahir" class="sr-only">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required >
        <label for="alamat" class="sr-only">Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="Alamat" required >
        <label for="tlp" class="sr-only">No. Tlp/HP</label>
        <input type="text" name="tlp" class="form-control" placeholder="No. Tlp/HP" required >
        
        
        <label for="username" class="sr-only">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username" required >
        <label for="email" class="sr-only">Email address</label>
        <input type="text" name="email" class="form-control" placeholder="Email address" required >
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
<!--          <button class="btn btn-lg btn-primary btn-block"  type="signup" name="signup">Signup</button> -->
        <input  type="submit" name="signup" value="signup"  >
        <a href="login.php">login</a>
      
      </form>
      <?php 
          if(isset($_POST['signup'])){
            include "koneksi.php";
            $insert = mysqli_query($conn," INSERT INTO user VALUES
              (NULL,
               '".$_POST['nama']."',
               
               '".$_POST['tanggal_lahir']."',
               '".$_POST['alamat']."',
               '".$_POST['tlp']."',
                
               '".$_POST['username']."',
               '".$_POST['email']."',
               '".$_POST['password']."')");
              if ($insert) {
                echo "Selamat Akun anda telah berhasih terdaftar !";
              }else{
                echo "Gagal Daftar, ulangi!";
              }
          }
       ?>

    </div> <!-- /container -->
  </body>
</html>
