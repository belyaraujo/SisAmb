<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro Usuário') }}
        </h2>
    </x-slot>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 ">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">


                <form action="{{ route('cadastro-user') }}" method="POST" class="row g-3">
                    @csrf
                    <div class="">
                        <div class="flex items-center">
                            <x-input-label for="name" :value="__('Nome')" /><i class="fa-regular fa-user pl-2"></i>
                        </div>

                        <x-text-input placeholder="Insira o nome:" id="name" class="block mt-1 w-80" type="text"
                            name="name" :value="old('name')" required autofocus autocomplete="name" />

                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <div class="flex items-center">
                            <x-input-label for="email" :value="__('Email')" /><i
                                class="fa-regular fa-envelope pl-3"></i>
                        </div>

                        <x-text-input placeholder="Insira o email:" id="email" class="block mt-1 w-80"
                            type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <div class="flex items-center">
                            <x-input-label for="password" :value="__('Senha')" /><i class="fa-solid fa-lock pl-2"></i>
                        </div>




                        <x-text-input placeholder="Digite a senha:" id="password" class="block mt-1 w-80"
                            type="password" name="password" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <div class="flex items-center">
                            <x-input-label for="password_confirmation" :value="__('Confirmar senha')" /><i
                                class="fa-solid fa-lock pl-2"></i>
                        </div>



                        <x-text-input placeholder="Confirme a senha:" id="password_confirmation" class="block mt-1 w-80"
                            type="password" name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-center mt-4">


                        <x-primary-button class="">
                            {{ __('Cadastrar') }}
                        </x-primary-button>
                    </div>
                </form>


            </div>

        </div>
    </div>
</x-app-layout>
