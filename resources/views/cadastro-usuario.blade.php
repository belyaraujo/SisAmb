<x-app-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar usuário') }}
        </h2>
    </x-slot>

    @if (session('msg'))
        <div class="alert alert-success" role="alert" style="width: 1200px">
            <p class="msg">
                {{ session('msg') }}
            </p>
        </div>
    @endif



    <div class="pb-12 flex items-center justify-center mt-8">
        <div class="sm:max-w-lg w-full p-10 bg-white rounded-xl z-10 flex flex-col items-center justify-center">
            {{-- <div class="flex flex-col items-center justify-center overflow-hidden shadow-sm sm:rounded-lg"> --}}
                <div class="text-center">
                    <h2 class="text-3xl font-bold text-gray-900">
                        Novo usuário
                    </h2>
                    <p class="mt-2 text-sm text-gray-400 pb-4">Preencha os campos abaixo para cadastrar um novo usuário.</p>
                </div>
                <form method="POST" action="{{ route('cadastro') }}">
                    @csrf
                    <!-- Name -->
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

            {{-- </div> --}}
        </div>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </div>


</x-app-layout>