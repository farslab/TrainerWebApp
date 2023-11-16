<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FitLife | Kayıt Ol</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <!-- Icons -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    
    <link
      rel="stylesheet"
      href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"
    />
   <!-- Css -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" />
 
  </head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/" class="h1"><b>Fit</b>Life</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Hemen Profilinizi Oluşturun</p>

      <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control" placeholder="İsim">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Parola">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Parola Tekrar">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="file" class="form-control" name="profile_photo" accept="image/*" placeholder="Profil Fotoğrafı">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-camera"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="date" class="form-control" name="birth_date" placeholder="Doğum Tarihi">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-calendar"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <select class="form-control" name="gender" placeholder="Cinsiyet">
                <option value="erkek">Erkek</option>
                <option value="kadin">Kadın</option>
            </select>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-venus-mars"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="tel" class="form-control" name="phone" placeholder="Telefon Numarası">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-phone"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- /.col -->
            <div class="col-4 mt-2">
                <button type="submit" class="btn btn-primary btn-block">Kayıt Ol</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
    
      <a href="/login" class="text-center pt-2">Zaten profiliniz var mı? Giriş Yapın</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
