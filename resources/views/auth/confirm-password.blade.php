<x-layouts.layout class="p-5">
    <div class="flex flex-row justify-center items-center min-h-full" style="background-image: url(https://cdn.pixabay.com/photo/2019/04/10/11/56/watercolor-4116932_1280.png); background-repeat: no-repeat; background-size: 100%; background-attachment: fixed">
        <div class="bg-white p-4 rounded-xl">
            <div class="mb-4 text-sm text-gray-600">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')"/>

                    <x-text-input id="password" class="block mt-1 w-full"
                                  type="password"
                                  name="password"
                                  required autocomplete="current-password"/>

                    <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                </div>

                <div class="flex justify-end mt-4">
                    <x-primary-button>
                        {{ __('Confirm') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.layout>
