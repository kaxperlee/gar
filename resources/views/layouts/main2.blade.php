<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link REL="stylesheet" href="{{asset('css/reboot.css')}}">
        <link REL="stylesheet" href="{{asset('css/estilos.css')}}">
        <link REL="stylesheet" href="{{asset('css/custom.css')}}">
        <script src="https://kit.fontawesome.com/50de09d042.js" crossorigin="anonymous"></script>
        <title>Grupo Asesor Ros</title>
    </head>
    <body class="bg-white">
        <!-- NAVBAR 1 -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Fifth navbar example" style="style='z-index:10000'">
            <div class="container-fluid">
                <a class="navbar-brand align-top me-auto" href="#">Grupo Asesor Ros</a>
                <ul class="navbar-nav mb-0 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="http://rosgrupoasesor.com">Web</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ayuda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style='z-index:10000'>
                            <li><a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ url('/user/profile') }}">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><form method="post" action="{{url('logout')}}">@csrf <button class="dropdown-item" type="submit">Log out</button></form></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End of NAVBAR 1 -->



        <!-- MAIN CONTENT -->
        <div class="d-flex container-fluid main" style='margin-bottom:30px;'>
             <!-- ASIDE -->
             <aside style="padding: 12px 18px 0 6px;width:290px;min-width:290px;border-right: 1px solid #cccccc !important;">
                <div style='height:50px; width:100%'>
                    <a href="/" class="">
                        <img src="{{asset('images/logo.png')}}" class="img-fluid" alt="...">
                    </a>
                    @yield('sidebar')
                </div>
            </aside>
            <!-- End of ASIDE -->

            <!-- SECTION -->
            <section class="flex-fill" style="padding: 12px 24px;">
                <article>
                </article>
                <div style='height:0px; width:100%'>
                    @yield('main')
                </div>
            </section>
             <!-- End of SECTION -->
        </div>

        <!-- End of MAIN CONTENT -->
        <!-- FOOTER -->
        <nav class="navbar fixed-bottom navbar-dark bg-dark">
            <div class="container-fluid d-flex justify-content-center">
                <a style='color:#888' class="navbar-brand" href="#"><small>Created with: Laravel</small></a>
            </div>
        </nav>
        <!-- End of FOOTER -->

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
    </body>
</html>
