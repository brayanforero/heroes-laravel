<header class="w-100">
    <div class="container">
        <nav class="navbar">
            <span class="navbar-brand">My Favorite Heroes</span>
            <ul class="nav">
                @guest
                    <li class="nav-item">
                    <a class="nav-link btn {{ request()->routeIs('home.*') ? 'btn-primary' : '' }} " href="{{route('home.index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn {{ request()->routeIs('auth.login') ? 'btn-primary' : '' }} " href="{{route('auth.login')}}">Login</a>
                    </li>
                @else
                    <li class="nav-item">
                        <span class="btn">Hola, {{auth()->user()->name}}</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn {{ request()->routeIs('heroes.*') ? 'btn-primary' : '' }} " href="{{route('heroes.index')}}">Heroes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn" href="{{route('heroes.index')}}">Logout</a>
                    </li>
                @endguest
            </ul>
        </nav>
    </div>
</header>

@if($message = session()->get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong class="d-block text-center">{{$message}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
