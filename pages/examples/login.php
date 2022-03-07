<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Oturumunuzu başlatmak için oturum açın
</p>


      <?php 
      session_start();
      include("../../../include/baglanti.php");

      if(isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789"){
        header(header: "Location:../../index.php");
      }

      elseif(isset($_COOKIE["cerez"])){
        $sorgu=$baglanti->prepare(query: "select email,yetki from kullanici where aktif=1");
          $sorgu ->execute();
         while($sonuc=$sorgu->fetch){
           if($_COOKIE["cerez"] == md5(string: "aa".$sonuc["email"]."bb")){
            $_SESSION["Oturum"] = "6789";
            $_SESSION["email"] = $sonuc["email"];
            $_SESSION["yetki"] = $sonuc["yetki"];
            header(header: "Location:../../index.php");
           }
         }
      }

      $email ="";
      if($_POST){
        $email = $_POST["txtEmail"];
        $parola = $_POST["txtParola"];
      }

      ?>


      <form action="login.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email adresinizi giriniz" name="txtEmail" value="<?php echo $email ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Şifrenizi giriniz" name="txtParola">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="cbHatirla">
              <label for="remember">
                Beni Hatırla 
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="submit" class="btn btn-primary btn-block" value="Giriş"/>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <?php 
        if($_POST)
        {
          $sorgu=$baglanti->prepare(query: "select parola,yetki from kullanici where email=:email and aktif=1");
          $sorgu ->execute(['email'=>htmlspecialchars($email)]);
          $sonuc=$sorgu->fetch();
          if($parola==$sonuc["parola"]){

            $_SESSION["Oturum"] = "6789";
            $_SESSION["email"] = $email;
            $_SESSION["yetki"] = $sonuc["yetki"];

            if(isset($_POST["cbHatirla"])){
              setcookie("cerez", md5(string: "aa".$email."bb"), time()+(60*60*1));
            }

            header(header: "Location:../../index.php");
          }
        }
      ?>



      <div class="social-auth-links text-center mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Facebook ile giriş yapın
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>Google ile oturum açın
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Şifremi Unuttum</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Kayıt olun</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
