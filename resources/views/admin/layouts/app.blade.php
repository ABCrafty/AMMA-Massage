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
    <link rel="stylesheet" href="/node_modules/datatables.net-dt/css/jquery.dataTables.css">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div class="admin-container">

        <main role="main">

            @php
                $homepage = \App\Models\Homepage::first();
                $user = \App\User::count();
            @endphp
                <div class="row no-gutters">
                    <div class="col-2 col-md-3 col-lg-3 col-xl-2 sidebar-admin">
                        <div class="admin-button">
                            <a href="{{ route('dashboard.index') }}">Admin Amma-Massage</a>
                        </div>
                        <div class="sidebar-profile">
                            <div class="admin-pic">
                                <img src="http://www.kippondream.com/uploads/membres/3/kuro.jpg" alt="">
                            </div>
                            <div class="admin-info">
                                <p>Bonjour {{ auth()->user()->username }}</p>
                                <div class="admin-actions">
                                    <a href="{{ route('users.edit', auth()->user()->id) }}"><i class="fa fa-id-card" aria-hidden="true"></i></a>
                                    <a href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                                </div>
                            </div>

                        </div>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('dashboard.index') }}">Tableau de bord</a></li>
                            @if($homepage)
                            <li><a href="{{ route('homepage.edit', ['id' => $homepage->id]) }}">Page d'accueil</a></li>
                            @else
                                <li><a href="{{ route('homepage.create') }}">Page d'accueil</a></li>
                            @endif
                            <li><a href="{{ route('story-amma.index') }}">Histoire AMMA</a></li>
                            <li><a href="{{ route('blog-admin.index') }}">Blog</a></li>
                            <li><a href="{{ route('users.index') }}">Utilisateurs</a></li>
                        </ul>
                    </div>
                    <div class="col-10 col-md-9 col-lg-9 col-xl-10">
                        <div class="admin-header">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
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

    @stack('scripts');
</body>