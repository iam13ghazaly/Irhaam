<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Inventory Login</title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
	<link rel="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js" href="styles.css">
   
  </head>
  <body>
    <div id="logo"> 
      <h1><i>INVENTORY BARANG</i></h1>
    </div> 
  <section class="stark-login">
    <form method="POST">	
      <div id="fade-box">
        <input type="text" name="username" id="username" placeholder="Masukan Email" required>
        <input type="password" name="password" id="password" placeholder="Masukan Password" required>
        <input type="submit" value="Log In" name="login">
      </div>
    </form>
        <div class="hexagons">
        </div>      
  </section> 
  <div id="circle1">
    <div id="inner-cirlce1">
      <h2></h2>
    </div>
  </div>
    <script src="js/index.js"></script>
  </body>
</html>
<?php  
include "../class/class.php";
  if (isset($_POST['login'])) {
    $cek = $admin->login_admin($_POST['username'],$_POST['password']);
    if ($cek == true) {
      echo "<script>window.location='../index.php';</script>";
    }//jika salah atau tidak benar maka login ulang
    else{
      echo "<script>alert('Login Gagal, Password / Email Salah!');</script>";
    }
  }
?>
