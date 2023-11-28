<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FitLife | Kayıt Ol</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" />

</head>

<body class="hold-transition register-page">
    <div class="register-box">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="/" class="h1"><b>Fit</b>Life</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Hemen Profilinizi Oluşturun</p>

                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="customer" name="role" />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="text" name="name" class="form-control" placeholder="İsim">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="profile_photo" accept="image/*"
                                    placeholder="Profil Fotoğrafı">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-camera"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="date" class="form-control" name="customer_birth_date"
                                    placeholder="Doğum Tarihi">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-calendar"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <select class="form-control" name="gender" placeholder="Cinsiyet">
                                    <option value="Erkek">Erkek</option>
                                    <option value="Kadın">Kadın</option>
                                </select>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-venus-mars"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="tel" class="form-control" name="phone_number"
                                    placeholder="Telefon Numarası">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-phone"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="customer_target">Hedef:</label>
                                <select name="customer_target" class="form-control" required>
                                    <option value="kilo_aldirma">Kilo Alma</option>
                                    <option value="kilo_verdirme">Kilo Verme</option>
                                    <option value="kilo_koruma">Kilo Koruma</option>
                                    <option value="kas_kazanma">Kas Kazanma</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Parola">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="password_confirmation"
                                    placeholder="Parola Tekrar">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center align-items-center mb-3">
                        <div class="col-6  mt-2">
                            <button type="submit" class="btn btn-primary btn-block">Kayıt Ol</button>
                        </div>
                    </div>
                </form>


                <a href="/login" class="text-center">Zaten profiliniz var mı? Giriş Yapın</a>
            </div>
        </div>
    </div>

    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>

</html>