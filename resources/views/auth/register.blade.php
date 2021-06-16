@extends('base')


@section('content')

<?php 
$erreur = "cette adresse mail est déja prise";
?>

<div class="container-fluid">
    <div class="row  ">
        <div class="col-12">
            <h1 class="d-flex justify-content-center p-2 border-bottom"> Inscription </h1>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-3">
        </div>
        <div class="col-6 d-flex justify-content-center">
            <div class="card mt-2">
                <div class="card-body ">
            <x-guest-layout>
                <x-auth-card>

                    <!-- Validation Errors -->
                   

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <x-label  class="d-flex justify-content-center lead" for="name" :value="__('Nom : ')"  />
                        <!-- Name -->
                        <div class="d-flex justify-content-center">
                           

                            <x-input id="name" class="" type="text" name="name" :value="old('name')" required autofocus />
                            @if ($errors->first('name'))
                        <div class="alert alert-danger">
                        <p> Nom trop long </p>
                        </div>
                            
                        @endif    
                        </div>
                        <x-label  class="mt-4 d-flex justify-content-center lead" for="email" :value="__('Email (étudiant) : ')" />
                        <!-- Email Address -->
                        <div class=" d-flex justify-content-center">
                       

                            <x-input id="email" class="" type="email" name="email" :value="old('email')" required />
                        </div> 
                        @if ($errors->first('email'))
                        <div class="alert alert-danger">
                        <p> Vous devez avoir une adresse mail étudiante </p>
                        </div>
                            
                        @endif    
                    <x-label  class="mt-4 d-flex justify-content-center lead" for="description" :value="__('description : ')" />
                        <!--description-->
                        <div class="d-flex justify-content-center">
                            

                            <textarea id="description" name="description" rows="6" cols="50" required></textarea>
                        </div>
                        @if ($errors->first('description'))
                        <div class="alert alert-danger">
                        <p> Description trop long trop long </p>
                        </div>
                            
                        @endif    
                        <x-label  class="mt-4 d-flex justify-content-center lead" for="niveau d'étude" :value="__('Niveau d\'étude : ')" />
                        <div class="d-flex justify-content-center">
                            

                            <SELECT id="level" class="" type="text" name="level" required> 
                                <OPTION> 2eme année
                                    <OPTION> 3eme année
                                        <OPTION> 4eme année
                                            <OPTION> 5eme année
                                </SELECT>
                        </div>
                         <x-label  class="mt-4 d-flex justify-content-center lead" for="ville" :value="__('Ville d\'étude :')" />
                        <div class="d-flex justify-content-center ">
                           

                            <SELECT id="city" class="" type="text" name="city" required> 
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

                        <x-label  class="mt-4 d-flex justify-content-center lead" for="password" :value="__('Mot de passe :')" />
                        <!-- Password -->
                        <div class=" d-flex justify-content-center">
                           

                            <x-input id="password" class=""
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />
                        </div>
                       
                        <x-label  class="mt-4 d-flex justify-content-center lead" for="password_confirmation" :value="__('Confirmer votre mot de passe :')" />
                        <!-- Confirm Password -->
                        <div class="d-flex justify-content-center">
                            

                            <x-input id="password_confirmation" class=""
                                            type="password"
                                            name="password_confirmation" required />
                        </div>
                        @if ($errors->first('password'))
                        <div class="alert alert-danger">
                        <p> Les mots de passe de correspondent pas ou ne sont pas valides (au moins 8 caractères) </p>
                        </div>
                            
                        @endif 
                        <br>
                        <div class="d-flex justify-content-center"> 
                            <label for="coche" class="lead" :value="__('Jacceptelachartedelanesf') ">

                            <input id="coche" class=""
                                            type="checkbox"
                                            name="coche"
                                            required> j'accepte la charte de l'anesf
                       
                        </div>
                        <a href="{{ route ('file.download.index') }}" class="lead pb-3 d-flex justify-content-center">Télécharger la charte JESCT</a>
                        <div class="d-flex justify-content-center"> 
                            <label for="coche" class="lead" :value="__('Jacceptelachartedelanesf') ">

                            <input id="coche" class=""
                                            type="checkbox"
                                            name="coche"
                                            required> j'accepte la clause RGPD
                        
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            <a class="" href="{{ route('login') }}">
                                {{ __('Déja inscrit?') }}
                            </a>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <x-button class="btn btn-primary">
                                {{ __('Inscription') }}
                            </x-button>
                        </div>
                    </form>
                </x-auth-card>
            </x-guest-layout>
        </div>
    </div>
</div>
<div class="col-3">
</div>
</div>
</div>
@endsection