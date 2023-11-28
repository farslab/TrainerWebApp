<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'FitLife')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}" />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet"
        href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}" />
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}" />

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @if(auth()->check())
        @if(auth()->user()->role === 'admin')
        @include('admin.admin-sidebar')
        @elseif(auth()->user()->role === 'trainer')
        @include('trainer.trainer-sidebar')
        @elseif(auth()->user()->role === 'customer')
        @include('customer.customer-sidebar')
        @endif
        @endif



        <div class="content-wrapper">
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
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('title','FitLife')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">

                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        {{auth()->user()->name}}
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{route('profile.edit',Auth::user()->id)}}"><i
                                                class="fas fa-user pr-2"></i>Profil Ayarları</a>
                                        <a class="dropdown-item" href="/logout"><i
                                                class="fas fa-sign-out-alt pr-2"></i>Çıkış Yap</a>
                                    </div>
                                </div>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            @yield('content')
        </div>

        <footer class="main-footer">
            <strong> &copy; 2023 FitLife.</strong>
        </footer>
    </div>
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>