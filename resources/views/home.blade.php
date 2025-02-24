<x-layouts.layout title="Página principal">
    @guest
        <div
            class="hero max-h-screen h-84v"
            style="background-image: url(https://cdn.pixabay.com/photo/2015/10/07/11/46/texture-976039_960_720.jpg); background-repeat: no-repeat; background-attachment: fixed;"
            class="bg-cover bg-center sm:bg-contain sm:bg-center">
            <div class="hero-overlay bg-opacity-20"></div>
            <div class="hero-content text-neutral-content text-center flex justify-center">
                <div class="max-w-md w-full shadow-lg rounded-xl" style="background:#ffffffd4;">
                    <h1 class="mb-5 text-5xl font-bold mt-5 text-cyan-600">¡Buenos días!</h1>
                    <p class="mb-5 p-2 text-black">
                        Para acceder a la gestión del centro, deberás <b><a href="{{route('login')}}">iniciar sesión</a></b>.
                    </p>
                </div>
            </div>
        </div>
    @endguest
    @auth
        {{-- Diseño móviles --}}
            <div
                class="hero max-h-screen h-84v"
                style="background-image: url(https://cdn.pixabay.com/photo/2015/10/07/11/46/texture-976039_960_720.jpg); background-repeat: no-repeat; background-attachment: fixed;"
                class="bg-cover bg-center sm:bg-contain sm:bg-center">
                <div class="flex flex-col justify-center">
                <div class="card bg-base-100 image-full w-96 shadow-xl justify-center content-center">
                    <figure>
                        <img
                            src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                            alt="Shoes" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">Shoes!</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>
                    <div class="card bg-base-100 image-full w-96 shadow-xl justify-center content-center">
                        <figure>
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" />
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title">Shoes!</h2>
                            <p>If a dog chews shoes whose shoes does he choose?</p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
    @endauth
</x-layouts.layout>
