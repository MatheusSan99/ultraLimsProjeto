<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Ultra Lims</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">
    @stack('adminStyle')
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/dashboard/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/dashboard/css.css')}}">
</head>
<body class="bg-dark">
<header id="header" class="header fixed-top d-flex align-items-center bg-dark">
    <div class="d-flex align-items-center justify-content-between"><a href="/" class="logo d-flex align-items-center">
            <img src="{{asset('img/icone/endereco.png')}}" class="mt-5" alt="consult-system" width="60px">
            <span class="d-none d-lg-block" id="titulo" >Ultra Lims</span></a><i class="bi bi-list toggle-sidebar-btn text-primary"></i>
    </div>
@yield('search')
    <nav class="header-nav ms-auto bg-light rounded p-2">
        <ul class="d-flex align-items-center">
            <li class="nav-item dropdown p-3 bg-light rounded">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"> <img src="{{asset('img/icone/user.png')}}" alt="Perfil" class="rounded-circle"> <span class="d-none d-md-block dropdown-toggle ps-2"></span> </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>Bem-Vindo Ultra Lims</h6>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li> <a class="dropdown-item d-flex align-items-center" href=""> <i class="bi bi-person"></i> <span>Meu Perfil</span> </a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li> <a class="dropdown-item d-flex align-items-center" href=""> <i class="bi bi-box-arrow-right"></i> <span>Sair</span> </a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
@yield('adminDashboard')
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@stack('adminScript')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="{{asset('js/dashboard/main.js')}}"></script>
<script src="{{asset('js/dashboard/scripts.js')}}"></script>
</body>
</html>
