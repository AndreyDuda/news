    <div class="row">
        <div class="col">

            @if (Route::has('login'))
                <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark fixed-top">
                    <a class="navbar-brand" href="#"><span style="color:red;" >NewsPortal</span></a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/home') }}">Главная</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav justify-content-end">
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/home') }}">Home</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="flex-sm-fill text-sm-center nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </nav>
            @endif
        </div>
    </div>
