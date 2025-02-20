<x-layouts.layout>
    @guest
        <div
            class="hero min-h-full flex flex-row justify-center items-center"
            style="background-image: url(https://cdn.pixabay.com/photo/2015/10/07/11/46/texture-976039_960_720.jpg); background-repeat: no-repeat; background-size: 100%; background-attachment: fixed">
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="hero-content text-neutral-content text-center flex justify-center">
                <div class="max-w-md shadow-lg rounded-xl" style="background:#ffffffd4;">
                    <h1 class="mb-5 text-5xl font-bold mt-5 text-cyan-600">¡Buenos días!</h1>
                    <p class="mb-5 p-2">
                        Para acceder a la gestión del centro, deberás <b><a href="{{route("login")}}">iniciar sesión</a></b>.
                    </p>
                </div>
            </div>
        </div>
    @endguest
    @auth
        <div class="card bg-base-100 w-96 shadow-xl">
            <figure>
                <img
                    src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                    alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">
                    Shoes!
                    <div class="badge badge-secondary">NEW</div>
                </h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <div class="badge badge-outline">Fashion</div>
                    <div class="badge badge-outline">Products</div>
                </div>
            </div>
        </div>
    @endauth
</x-layouts.layout>
