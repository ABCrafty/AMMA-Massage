<nav class="navbar navbar-toggleable-sm navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ asset('/') }}" title="homepage">
        <img src="{{asset('image/logo.png')}}" title="logo" alt="logo" class="logo-img">
    </a>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="#">Histoire du AMMA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Entreprises</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Evénementiel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Particuliers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>

            <ul class="nav navbar-nav navbar-right">

                @if (Auth::guest())
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="{{ route('register.create') }}" class="nav-link">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" id="dMenuButton"
                                data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ auth()->user()->username }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dMenuButton" role="menu">
                            <li class="dropdown-item">
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
    </div>
</nav>