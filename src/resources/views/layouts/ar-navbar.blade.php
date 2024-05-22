


<nav class="navbar navbar-expand-lg">
    <div class="container flex-row-reverse">
        <a class="navbar-brand d-flex align-items-center flex-row-reverse" href="{{ route('AR') }}">
            <img src="images/business-bag.svg" class="img-fluid logo-image ">

            <div class="d-flex flex-column me-3 ">
                <strong class="logo-text ">جهـات</strong>
                <small class="logo-slogan text-end">بوابة التوظيف</small>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-center ms-lg-5 flex-row-reverse">
                <div class="d-flex flex-row-reverse col-10">
                    
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('AR') }}">الصفحة الرئيسية</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('AR.about') }}">عن بوابة التوظيف</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('AR.contact') }}">للتواصل</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">صفحات</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('AR.job-listings') }}">قائمة الوظائف</a></li>

                            <li><a class="dropdown-item" href="{{ route('AR.job-details') }}">تفاصيل الوظيفة</a></li>
                        </ul>
                    </li>

                    

                    <li class="nav-item">
                        
                        <a class="nav-link underline" href="{{ route('EN') }}"><span class="bi bi-translate"></span></a>
                    </li>
                </div>

                <!--auth-->
                @if (Route::has('login'))
                    <div class="hidden d-flex align-items-center me-5 col-2">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="nav-link underline">مرحبا <strong>{{ Auth::user()->name }}</strong></a>

                        @else
                            <li class="nav-item"> <a href="{{ route('login')}}" class= "nav-link custom-btn btn">دخـول</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item me-lg-auto"> <a href="{{ route('register') }}"
                                class="nav-link">للتسجيل</a>
                                </li>
                            @endif
                        @endauth
                    </div>
                @endif
                

            </ul>
        </div>
    </div>
</nav>