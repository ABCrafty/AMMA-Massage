<nav class="navbar navbar-toggleable-sm navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ asset('/') }}" title="homepage">
        <img src="{{asset('image/logo.png')}}" title="logo" alt="logo" class="logo-img">
    </a>

    <div class="collapse navbar-collapse" id="navbarMenu">
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
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle dropdown-custom-style" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ auth()->user()->username }}
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('users.edit', auth()->user()->id) }}">Voir mon profil</a>
                            <a class="dropdown-item" href="{{ route('logout') }}">Me déconnecter</a>
                        </div>
                    </div>
                @endif
            </ul>
    </div>
</nav>