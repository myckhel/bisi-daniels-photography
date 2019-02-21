
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
