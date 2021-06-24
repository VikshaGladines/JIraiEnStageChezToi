@extends('base')

@section('content')
<div class="container-fluid">
    <div class="row "> 
        <div class="col-12">
        <h1 class="d-flex justify-content-center p-3 border-bottom"> Faite une demande </h1> <br>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-3">
        </div>
    <div class="col-6 d-flex justify-content-center">
        <div class="card stylecard">  
            <div class="card-body">
                <form method="POST" action="{{ route ('demand.store') }}">
                    <div class="form-group pt-4 pb-4">
                        @csrf
                        <input type="hidden" class="d-flex justify-content-center form-control" name="user_id" value="{{ $createdemande }}">

                        <label class="d-flex justify-content-center lead" for="email"> Veuillez saisir votre email </label>
                        <div class="d-flex justify-content-center p-1">

                        <input type="email" id="email "name="email" size="30" required>
                        </div>

                        <label class="d-flex justify-content-center lead" for="title"> Veuillez saisir le titre de votre demande </label>

                        <div class="d-flex justify-content-center p-1">
                        <input type="text" id="title "name="title" size="30" required>
                        </div>
                        @if ($errors->first('title'))
                        <div class="alert alert-danger">
                        <p> Titre de la demande trop long </p>
                        </div>
                        
                        @endif 
                        <label class="d-flex justify-content-center lead" for="desc"> Veuillez saisir la description de la demande </label>

                        <div class="d-flex justify-content-center p-1">
                        <textarea id="Tiny-text" id="desc"name="content" rows="5" cols="50" required></textarea>
                        </div>
                        @if ($errors->first('content'))
                        <div class="alert alert-danger">
                        <p> Description de la demande trop long </p>
                        </div>
                        
                        @endif 
                        <label class="d-flex justify-content-center lead" for="select"> Veuillez choisir la région de la demande </label>

                        <div class="d-flex justify-content-center p-1">
                        <SELECT class="d-flex justify-content-center m-1" name="region" id="select"size="1" required>
                            <OPTION>Auvergne-Rhone-Alpes
                            <OPTION>Bourgogne-Franche-Comté
                            <OPTION>Bretagne
                            <OPTION>Centre-Val de Loire
                            <OPTION>Corse
                            <OPTION>Grand Est
                            <OPTION>Hauts-de-France
                            <OPTION>Ile-de-France
                            <OPTION>Normandie
                            <OPTION>Nouvelle-Aquitaine
                            <OPTION>Occitanie
                            <OPTION>Pays de la Loire
                            <OPTION>Provence-Alpes-Côte d’Azur
                            <OPTION>Guyane
                            <OPTION>Reunion
                            <OPTION>Martinique
                            <OPTION>Guadeloupe
                            <OPTION>Mayotte
                        </SELECT>
                        </div>

                        <label class="d-flex justify-content-center lead" for="ville"> Veuillez saisir la ville de la demande </label>

                        <div class="d-flex justify-content-center p-1">
                        <input type="text" id="ville" name="ville" size="30" required>
                        </div>

                        @if ($errors->first('ville'))
                        <div class="alert alert-danger">
                        <p> Nom de la ville trop long </p>
                        </div>
                        
                        @endif 
                        <div class="d-flex justify-content-center p-1">
                        <button class="d-flex justify-content-center btn btn-primary mt-3" type="submit">Soumettre la demande </button>
                        </div>
                    </div>
                    </form>
            </div>
        </div>
    </div>
    <div class="col-3">
    </div>
    </div>
</div>
@endsection