@extends('base')

@section('content')
    
<div class="container-fluid">
    <div class="row  mb-3">
        <div class="col-12 d-flex justify-content-center">
            <div class="p-2">
                <x-guest-layout>
                    <x-auth-card>
                        <x-slot name="logo">
                            <a href="/">
                                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                            </a>
                        </x-slot>

                        <div class="m-4 text-sm text-gray-600">
                            <h4 class="d-flex justify-content-center"> {{ __('vous avez oublié votre mot de passe ? ') }}</h4>
                        </div> 
                        <div class="m-4 lead text-sm text-gray-600">
                            {{ __('Veuillez rentrer votre adresse mail afin de pouvoir refaire un nouveau mot de passe.') }}
                        </div>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <!-- Email Address -->
                            <x-label for="email" class="d-flex justify-content-center" :value="__('Email : ')" />
                            <div class="d-flex justify-content-center">
                            

                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <div class="d-flex justify-content-center mt-4">
                                <x-button class="btn btn-primary">
                                    {{ __('Envoie du mail') }}
                                </x-button>
                            </div>
                        </form>
                    </x-auth-card>
                </x-guest-layout>
            </div>
        </div>
    </div>
</div>
@endsection