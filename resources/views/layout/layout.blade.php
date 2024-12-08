<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Waste</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- Navbar -->
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-transparent" style="background-color: #f2f2f2">
                <!-- Container wrapper -->
                <div class="container-fluid">
                    <!-- Navbar brand -->
                    <a class="navbar-brand text-dark" href="#">E-Waste</a>

                    <!-- Icons --><?php /* */ ?>
                    <ul class="navbar-nav d-flex flex-row me-1">
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link text-dark" href="{{route('user.about')}}"><i class="fas fa-envelope mx-1"></i> About Us</a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link text-dark" href="#"><i class="fas fa-cog mx-1"></i> Settings</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user mx-1"></i>
                                Profile
                            </a>
                            <!-- <a data-mdb-dropdown-init class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false"> <i class="fas fa-user mx-1"></i> Profile </a> -->
                            <!-- Dropdown menu -->
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item text-dark" href="#">My account</a> <?php /* href="{{route('user.profile', ['user' => $user->id])}}" */ ?>
                                </li>
                                <li>
                                    <a class="dropdown-item text-dark" href="#">Log out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Container wrapper -->
            </nav>
            <!-- Navbar -->
        </div>
    </div>
    @yield('content')
</body>
</html>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>


