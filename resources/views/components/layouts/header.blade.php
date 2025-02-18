{{--Diseño para ordenadores --}}
<header class="h-10v hidden lg:flex bg-header flex flex-row justify-between items-center p-3 text-white">
    <img class="h-16 max-h-full" src="{{asset("images/logo.png")}}" alt="logo">
    <h1 class="text-5xl">Gestión centro</h1>
    <div class="flex flex-row justify-end">
        @guest
            <form action="">
                <a href="{{route("login")}}" class="btn btn-sm btn-primary mr-5">Acceder</a>
                <a href="{{route("register")}}" class="btn btn-sm">Crear cuenta</a>
            </form>
        @endguest
        @auth
            <div class="flex items-center flex-row">
                <div class="avatar">
                    <div class="w-16 p-2">
                        <img class="rounded-full"
                             src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"/>
                    </div>
                </div>

                <span class="mr-5">{{auth()->user()->name}}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-sm">Cerrar sesión</button>
                </form>
            </div>
        @endauth
    </div>
</header>

{{-- Diseño para móviles --}}
<header class="lg:hidden bg-header flex flex-row justify-between items-center p-3 text-white">
    <img class="max-h-full h-7" src="{{asset("images/logo.png")}}" alt="logo">
    <h1 class="text-5xl">Centro</h1>
    @guest
        <form action="">
            <a href="{{route("login")}}" class="btn btn-sm btn-primary">Login</a>
            <a href="{{route("register")}}" class="btn btn-sm">Register</a>
        </form>
    @endguest
    @auth
        <div class="flex items-center flex-row">
            <div class="avatar">
                <div class="w-16 p-2">
                    <img class="rounded-full"
                         src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"/>
                </div>
            </div>
            <span class="hidden md:flex mr-5">{{auth()->user()->name}}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-sm">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    @endauth
</header>
