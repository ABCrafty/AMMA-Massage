<!DOCTYPE html>

<head>
    <meta name="description" content="">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>

<body>

    @if($flash = session('message'))
        <div class="alert alert-success alert-admin animated bounceInRight" role="alert">
            <p>{{ $flash }}</p>
        </div>
    @endif

    @if($flash = session('warning'))
        <div class="alert alert-warning alert-admin animated bounceInRight" role="alert">
            <p>{{ $flash }}</p>
        </div>
    @endif

    @if($flash = session('danger'))
        <div class="alert alert-danger alert-admin animated bounceInRight" role="alert">
            <p>{{ $flash }}</p>
        </div>
    @endif

    <div class="admin-container">

        <main role="main">
                <div class="row no-gutters">
                    <div class="sidebar-admin">
                        <div class="admin-button">
                            <a href="{{ route('dashboard.index') }}">Admin <span class="show-sidebar">Amma-Massage</span></a>
                        </div>
                        <div class="sidebar-profile">
                            <div class="admin-pic">
                                @if(auth()->user()->avatar)
                                    <img src="/{{ auth()->user()->avatar }}" alt="">
                                @else
                                    <img src="{{ url('image/gravatar.png') }}" alt="">
                                @endif
                            </div>
                            <div class="admin-info show-sidebar">
                                <p>Bonjour {{ auth()->user()->username }}</p>
                                <div class="admin-actions">
                                    <a href="{{ route('users.edit', auth()->user()->id) }}"><i class="fa fa-id-card" aria-hidden="true"></i></a>
                                    <a href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                                </div>
                            </div>

                        </div>
                        <ul class="list-unstyled menu-admin">

                            <li>
                                <i class="fa fa-tachometer" aria-hidden="true"></i>
                                <span class="show-sidebar">
                                    <a href="{{ route('dashboard.index') }}">Tableau de bord</a>
                                </span>
                            </li>
                            @if($homepage)
                                <li>
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <span class="show-sidebar">
                                        <a href="{{ route('homepage.edit', ['id' => $homepage->id]) }}">Page d'accueil</a>
                                    </span>
                                </li>
                            @else
                                <li>
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <span class="show-sidebar">
                                        <a href="{{ route('homepage.create') }}">Page d'accueil</a>
                                    </span>
                                </li>
                            @endif

                            @if($ammaStory)
                            <li>
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <span class="show-sidebar">
                                    <a href="{{ route('amma-story.edit', ['id' => $ammaStory->id]) }}">Histoire Amma</a>
                                </span>
                            </li>
                            @else
                                <li>
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    <span class="show-sidebar">
                                    <a href="{{ route('amma-story.create') }}">Histoire Amma</a>
                                </span>
                                </li>
                            @endif
                            <li>
                                <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                <span class="show-sidebar">
                                    <a href="{{ route('blog.index') }}">Blog</a>
                                </span>
                            </li>
                            <li>
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="show-sidebar">
                                    <a href="{{ route('users.index') }}">Utilisateurs</a>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="admin-main-content">
                        <div class="admin-header">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle dropdown-custom-style" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="admin-pic-dropdown">
                                        @if(auth()->user()->avatar)
                                            <img src="/{{ auth()->user()->avatar }}" alt="">
                                        @else
                                            <img src="{{ url('image/gravatar.png') }}" alt="">
                                        @endif
                                    </div>
                                    {{ auth()->user()->username }}
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('users.edit', auth()->user()->id) }}">Voir mon profil</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Me déconnecter</a>
                                </div>
                            </div>
                        </div>
                            <div class="admin-content">
                                @yield('content')
                            </div>
                    </div>
                </div>

        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    @stack('scripts')
</body>