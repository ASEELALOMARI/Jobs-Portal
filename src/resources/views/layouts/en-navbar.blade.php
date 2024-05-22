<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('EN') }}">
            <img src="images/business-bag.svg" class="img-fluid logo-image">

            <div class="d-flex flex-column">
                <strong class="logo-text">Jehat</strong>
                <small class="logo-slogan">Online Job Portal</small>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-center ms-lg-5">
                <div class="d-flex col-10">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('EN') }}">Homepage</a>
                    </li>

                    <li class="nav-item">
                        
                        <a class="nav-link" href="{{ route('EN.about') }}" id="navAbout">About Job portal</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('EN.contact') }}">Contact</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('EN.job-listings') }}">Job Listings</a></li>

                            <li><a class="dropdown-item" href="{{ route('EN.job-details') }}">Job Details</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        
                        <a class="nav-link underline" href="{{ route('AR') }}">
                            <span class="bi bi-translate"></span>
                        </a>
                    </li>

                    

                </div>

                @if (Route::has('login'))
                    <div class="hidden d-flex align-items-center ms-5 col-2">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="nav-link underline"> Hello <strong>{{ Auth::user()->name }}</strong></a>

                        @else
                            <li class="nav-item"> <a href="{{ route('login')}}" class= "nav-link custom-btn btn">Login</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item me-lg-auto"> <a href="{{ route('register') }}"
                                class="nav-link">register</a>
                                </li>
                            @endif
                        @endauth
                    </div>
                @endif
            </ul>
        </div>
    </div>
</nav>