<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email (étudiant)')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-label for="niveau d'étude" :value="__('niveau')" />

                <SELECT id="level" class="block mt-1 w-full" type="text" name="level" required> 
                    <OPTION> level 1
                        <OPTION> level 2
                            <OPTION> level 3 
                     </SELECT>
            </div>
            <div class="mt-4">
                <x-label for="ville" :value="__('city')" />

                <SELECT id="city" class="block mt-1 w-full" type="text" name="city" required> 
                    <OPTION> AMIENS
                    <OPTION> ANGERS
                    <OPTION> BESANCON
                    <OPTION> BORDEAUX 
                    <OPTION> BOURG EN BRESSE
                    <OPTION> BREST
                    <OPTION> CAEN
                    <OPTION> CLERMONT FERRAND
                    <OPTION> DIJON
                    <OPTION> GRENOBLE 
                    <OPTION> LILLE FMM
                    <OPTION> LILLE CHR
                    <OPTION> LIMOGES
                    <OPTION> LYON
                    <OPTION> MARSEILLE
                    <OPTION> METZ
                    <OPTION> MONTPELLIER
                    <OPTION> NANCY
                    <OPTION> NANTES
                    <OPTION> NICE
                    <OPTION> NÎMES
                    <OPTION> PARIS Baudelocque
                    <OPTION> PARIS Foch
                    <OPTION> PARIS Poissy
                    <OPTION> PARIS Saint-Antoine
                    <OPTION> POITIERS
                    <OPTION> REIMS
                    <OPTION> RENNES
                    <OPTION> ROUEN
                    <OPTION> STRASBOURG
                    <OPTION> TOULOUSE
                    <OPTION> TOURS
                    <OPTION> LA REUNION
                    </SELECT>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
            <br>
            <div> 
                <label for="coche" :value="__('Jacceptelachartedelanesf')">

                <input id="coche" class=""
                                type="checkbox"
                                name="coche"
                                required> j'accepte la charte de l'anesf
               
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
