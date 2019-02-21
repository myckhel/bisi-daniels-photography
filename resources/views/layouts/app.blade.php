<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name') }}</title>

    <link rel="shortcut icon" href="{{ URL::asset('img/core-img/favicon.ico') }}">

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/core-style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">

    <!-- Responsive CSS -->
    <link href="{{URL::asset('css/responsive.css')}}" rel="stylesheet">
    @yield('css')

</head>
<body>

      <!-- Preloader -->
      <div id="preloader">
          <div class="showbox">
              <div class="loader">
                  <svg class="circular" viewBox="25 25 50 50">
                      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                  </svg>
              </div>
          </div>
          <div class="questions-area text-center">


          </div>
      </div>
    <!-- Preloader -->
    <!-- <div id="preloader">
        <div class="showbox">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                </svg>
            </div>
        </div>
        <div class="questions-area text-center">
            <p>Did you know?</p>
            <ul>
                <li>The largest photography competition is 353,768 entries.</li>
                <li>Photography is the toughest profession in the world.</li>
                <li>The world’s largest photo album by dimensions was 13 ft 11.5 in x 17 ft.</li>
                <li>The world’s largest photo mosaic featured 176,175 pictures.</li>
                <li>The world’s largest camera lens was a 5200mm lens attached to a canon.</li>
            </ul>
        </div>
    </div> -->

    <!-- Gradient Background Overlay -->
    <div class="gradient-background-overlay"></div>

    <!-- Header Area Start -->
    <!-- <?php //require __DIR__ .'/../views/header.php'; ?> -->
    <header class="header-area bg-img" style="background-image: url({{URL::asset('img/bg-img/14.jpg')}});">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 h-100">
                    <div class="main-menu h-100">
                        <nav class="navbar h-100 navbar-expand-lg">
                            <!-- Logo Area  -->
                            <a class="navbar-brand" href="{{route('home')}}"><img src="{{URL::asset('img/core-img/IMG_3003.png')}}" alt="Logo"></a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#studioMenu" aria-controls="studioMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu</button>

                            <div class="collapse navbar-collapse" id="studioMenu">
                                <!-- Menu Area Start  -->
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                                    </li>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('about')}}">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('portfolio')}}">Portfolio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('blog')}}">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('contact')}}">contact</a>
                                    </li>
                                    @auth
                                    <li class="nav-item">
                                        <a
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                          class="nav-link" href="{{route('logout')}}">logout</a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('login')}}">login</a>
                                    </li>
                                  @endauth
                                </ul>
                                <!-- Search Form -->
                                <div class="header-search-form ml-auto">
                                    <form action="#">
                                        <input type="search" class="form-control" placeholder="Input your keyword then press enter..." id="search" name="search">
                                        <input class="d-none" type="submit" value="submit">
                                    </form>
                                </div>
                                <!-- Search btn -->
                                <div id="searchbtn">
                                    <img src="{{URL::asset('img/core-img/search.png')}}" alt="">
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Social Sidebar Area Start -->
    <div class="social-sidebar-area">
        <!-- Social Area -->
        <div class="social-info-area">
            <a href="#" data-toggle="tooltip" data-placement="right" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i> <span>Facebook</span></a>
            <a href="#" data-toggle="tooltip" data-placement="right" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i> <span>Twitter</span></a>
            <a href="#" data-toggle="tooltip" data-placement="right" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i> <span>Pinterest</span></a>
            <a href="#" data-toggle="tooltip" data-placement="right" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i> <span>Behance</span></a>
        </div>
    </div>
    <!-- Social Sidebar Area End -->

    @yield('content')



    <!-- Footer Area Start -->
    <?php //require __DIR__ .'/../views/footer.php'; ?>
    <!-- Footer Area Start -->
    <footer class="footer-area">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="footer-content h-100 d-md-flex align-items-center justify-content-between">
                        <!-- Single Footer Content -->
                        <div class="single-footer-content">
                            <img src="{{URL::asset('img/core-img/map.png') }}" alt="">
                            <a href="#">lekki,lagos Nigeria</a>
                        </div>
                        <!-- Single Footer Content -->
                        <div class="single-footer-content">
                            <img src="{{URL::asset('img/core-img/smartphone.png') }}" alt="">
                            <a href="tel:+2348162875656" type="tel:+2348162875656">+2348162875656</a>
                        </div>
                        <!-- Single Footer Content -->
                        <div class="single-footer-content">
                            <img src="{{URL::asset('img/core-img/envelope-2.png') }}" alt="">
                            <a href="mailto:bisidanielsphotography@gmail.com" type="">bisidanielsphotography@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{URL::asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{URL::asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{URL::asset('js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{URL::asset('js/active.js')}}"></script>
    @yield('js')

</body>

</html>
