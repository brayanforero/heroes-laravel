<header class="w-100">
    <div class="container">
        <nav class="navbar">
            <span class="navbar-brand">My Favorite Heroes</span>
            <ul class="nav">
                @guest
                    <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home.*') ? 'btn btn-primary' : '' }} " href="{{route('home.index')}}">Home</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('heroes.*') ? 'btn btn-primary' : '' }} " href="{{route('login')}}">Login</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('heroes.*') ? 'btn btn-primary' : '' }} " href="{{route('heroes.index')}}">Heroes</a>
                    </li>
                @else
                    

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('heroes.*') ? 'btn btn-primary' : '' }} " href="{{route('heroes.index')}}">Logout</a>
                    </li>
                @endguest
            </ul>
        </nav>
    </div>
</header>
