<nav class="navbar navbar-expand-lg navbar-light bg-faded">
    <a class="navbar-brand" href="{{ asset('/') }}" title="homepage">
        <img src="{{asset('image/logo.png')}}" title="logo" alt="logo" class="logo-img">
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('front-amma-story.index') }}">Histoire du AMMA</a>
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
                <a class="nav-link" href=" {{ route('front-blog.index') }}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>

            @role('admin')
                <li class="nav-item">
                    <a href="{{ route('dashboard.index') }}" class="nav-link">Accéder à la zone admin</a>
                </li>
            @endrole
        </ul>

            <ul class="nav navbar-nav navbar-right">

                @if (!auth()->guest())
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle dropdown-custom-style" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="admin-pic-dropdown">
                                @if(auth()->user()->avatar)
                                    <img src="/{{ auth()->user()->avatar }}" alt="">
                                @else
                                    <img src="{{ url('images/gravatar.png') }}" alt="">
                                @endif
                            </div>
                            {{ auth()->user()->username }}
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('users.edit', auth()->user()->id) }}">Voir mon profil</a>
                            <a class="dropdown-item" href="{{ route('home') }}">Retourner sur le site</a>
                            <a class="dropdown-item" href="{{ route('logout') }}">Me déconnecter</a>
                        </div>
                    </div>
                @endif
            </ul>
    </div>
</nav>