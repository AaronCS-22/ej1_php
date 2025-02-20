<x-layouts.layout class="p-5" title="Recuperar contraseña">
    <div class="flex flex-row justify-center items-center min-h-full" style="background-image: url(https://cdn.pixabay.com/photo/2019/04/10/11/56/watercolor-4116932_1280.png); background-repeat: no-repeat; background-size: 100%; background-attachment: fixed">
        <div class="bg-white p-4 rounded-xl">
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')"/>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')"/>
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                  required autofocus/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.layout>
