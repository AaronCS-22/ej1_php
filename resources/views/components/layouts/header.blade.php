<header class="h-10v bg-header flex flex-row justify-between items-center p-3">
    <img class="h-16 max-h-full" src="{{asset("images/logo.png")}}" alt="logo">
    <h1 class="text-5xl text-white">Gestión centro</h1>
    @guest
        <form action="">
            <a href="{{route("login")}}" class="btn btn-sm btn-primary">Login</a>
            <a href="{{route("register")}}" class="btn btn-sm">Register</a>
        </form>
    @endguest
    @auth
        {{auth()->user()->name}}
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="btn btn-sm">
                {{ __('Log Out') }}
            </button>
        </form>
    @endauth
</header>
