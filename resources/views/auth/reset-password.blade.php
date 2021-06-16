@extends('base')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <div class="col-6">
            <x-guest-layout>
                <x-auth-card>
                    <x-slot name="logo">
                        <a href="/">
                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                        </a>
                    </x-slot>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <x-label  class="d-flex items-center justify-content-center " for="email" :value="__('Email :')" />
                        <!-- Email Address -->
                        <div class="d-flex items-center justify-content-center mb-4">
                            

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                        </div>
                        <x-label  class="d-flex items-center justify-content-center " for="password" :value="__('Mot de passe :')" />
                        <!-- Password -->
                        <div class=" d-flex items-center justify-content-center  mb-4">
                            

                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
                        </div>
                        <x-label  class="d-flex items-center justify-content-center " for="password_confirmation" :value="__('Confirmer le mot de passe :')" />
                        <!-- Confirm Password -->
                        <div class=" d-flex items-center justify-content-center  mb-4">
                            

                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                                type="password"
                                                name="password_confirmation" required />
                        </div>

                        <div class="d-flex items-center justify-content-center ">
                            <x-button class="btn btn-primary">
                                {{ __('Changer de mot de passe') }}
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
