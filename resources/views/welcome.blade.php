<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>FitLife Anasayfa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,300&display=swap"
        rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="/"><strong>Fit</strong>Life</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    @auth

                    <li><a class="getstarted " href="/dashboard">Panele Git</a></li>

                    @else
                    <li><a href="{{route('login')}}">Giriş Yap</a></li>
                    <li><a class="getstarted " href="{{route('register')}}">Kayıt Ol</a></li>
                    @endauth
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center background-image-div">
        <div class="container position-relative "  >
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>FitLife ile <br>Güçlü Yarınlara</h1>
                    <h2>Güçlü FitLife Programlarına Başlayın</h2>
                </div>
            </div>
            <div class="text-center">
                <a href="{{route('register')}}" class="btn-get-started scrollto">Hemen Hesap Oluştur</a>
            </div>

            <div class="row icon-boxes ">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" >
                    <div class="icon-box">
                        <div class="icon"><i class="ri-stack-line"></i></div>
                        <h4 class="title"><a href="">Antrenman Takibi</a></h4>
                        <p class="description">Antrenörünüz tarafından antrenman ve beslenme gelişiminiz takip edilir ve program düzenlenir.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" >
                    <div class="icon-box">
                        <div class="icon"><i class="ri-donut-chart-line"></i></div>
                        <h4 class="title"><a href="">Beslenme Rehberi</a></h4>
                        <p class="description">En doğru beslenme programları hedefinize en hızlı yoldan ulaşmanıza yardımcı olacak.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" >
                    <div class="icon-box">
                        <div class="icon"><i class="ri-video-chat-line"></i></div>
                        <h4 class="title"><a href="">Video İçerik</a></h4>
                        <p class="description">Eğitmenlerimiz tarafından eklenen antrenman programları için video açıklamalar.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" >
                    <div class="icon-box">
                        <div class="icon"><i class="ri-contacts-book-2-line"></i></div>
                        <h4 class="title"><a href="">Birebir İletişim</a></h4>
                        <p class="description">Antrenörünüzle doğrudan kesintisiz iletişim kurabileceğiniz mesajlaşma arayüzü.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</body>

</html>