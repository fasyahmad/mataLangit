<section>
    <div class="container navbar navbar-expand-lg navbar-light bg-light">
        <a href="" class="navbar-brand">
            <img src="frontend/images/log1.png"class="" alt="">
        </a>
        <!-- button mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- end button mobile -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-4 mr-4">
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link active">
                        Home
                    </a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">
                        Paket Travel
                    </a>
                </li>
                <li class="nav-item dropdown" >
                    <a href="" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        Services
                    </a>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">link1</a>
                        <a href="" class="dropdown-item">link2</a>
                        <a href="" class="dropdown-item">link3</a>
                    </div>
                </li>

                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">
                        Testimonial
                    </a>
                </li>
            </ul>
            @guest
            <!-- mobile button -->
            <form class="form-inline d-sm-block d-md-none">
                <button class="btn btn-login my-2 my-sm-0" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">  
                    Masuk
                </button>
            </form>
            <!-- end mobile button -->
            <!--  button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">  
                    Masuk
                </button>
            </form>
            <!--  end button -->
            @endguest

            @auth
            <!-- mobile button -->
            <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="post">
                @csrf
                <button class="btn btn-login my-2 my-sm-0" >  
                    Keluar
                </button> 
            </form>
            <!-- end mobile button -->
            <!--  button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="post">
                @csrf    
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">  
                    Keluar
                </button>
            </form>
            <!--  end button -->
            @endauth
            
        </div>
    </div>
</section>