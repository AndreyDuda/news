
<div class="row">
        <div class="col">

            @if (Route::has('login'))
                <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark fixed-top">
                    <a class="navbar-brand" href="{{ route('index') }}"><span style="color:red;" >NewsPortal</span></a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">

                        </ul>
                        <ul class="navbar-nav justify-content-end">
                            @auth
                                @if( \Request::route()->getPrefix() == '/home')
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ Auth::user()->name }}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="right:0; left:auto; ">
                                            <a class="dropdown-item" href="{{ route('home') }}">Список всех новостей</a>
                                            <a class="dropdown-item" href="{{ route('add') }}"> Добавить Новость</a>
                                            <a class="dropdown-item" href="{{ route('userInfo') }}">Профайл</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span style="color: red;">Выйти</span></a>
                                        </div>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/home') }}">Кабинет</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" style="color: red;" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Выйти
                                        </a>
                                    </li>
                                @endif
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            @else
                                <li class="nav-item">
                                    <a class="flex-sm-fill text-sm-center nav-link" href="{{ route('login') }}">Вход</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </nav>
            @endif
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>