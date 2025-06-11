<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- nome -->
        <div>
            <x-input-label for="name" :value="'Nome completo'" />
            <x-text-input id="name" class="block mt-1 w-full" placeholder="Digite seu nome completo" type="text"
                name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- email -->
        <div class="mt-4">
            <x-input-label for="email" :value="'E-mail'" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                placeholder="Digite seu e-mail" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- CPF/CNPJ -->
        <div class="mt-4">
            <x-input-label for="cpf_cnpj" :value="'CPF ou CNPJ'" />
            <x-text-input id="cpf_cnpj" class="block mt-1 w-full" type="text" name="cpf_cnpj" :value="old('cpf_cnpj')"
                placeholder="Digite seu CPF ou CNPJ" required autocomplete="cpf_cnpj" />
            <x-input-error :messages="$errors->get('cpf_cnpj')" class="mt-2" />
        </div>

        <!-- senha -->
        <div class="mt-4">
            <x-input-label for="password" :value="'Senha'" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                placeholder="Digite sua senha" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- confirma senha -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="'Confirme a senha'" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" placeholder="Confirme sua senha" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Já possui cadastro?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
