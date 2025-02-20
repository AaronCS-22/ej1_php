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
            <div tabindex="0" role="button" class="dropdown dropdown-end">
                <div class="flex flex-row mr-5">
                    <div class="btn btn-ghost btn-circle avatar">
                        <div class="w-14 rounded-full">
                            <img
                                alt="Tailwind CSS Navbar component"
                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"/>
                        </div>
                    </div>
                    <span class="content-center ml-5">{{auth()->user()->name}}</span>
                </div>
                <ul
                    tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="justify-between text-gray-500">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
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
        <div tabindex="0" role="button" class="dropdown dropdown-end">
            <div class="flex flex-row mr-5">
                <div class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img
                            alt="Tailwind CSS Navbar component"
                            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"/>
                    </div>
                </div>
            </div>
            <ul
                tabindex="0"
                class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="justify-between text-gray-500">
                            Cerrar sesión
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    @endauth
</header>
