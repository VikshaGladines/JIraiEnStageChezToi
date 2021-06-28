@extends('base')

@section('content')
<div class="container-fluid">
    <div class="row ">
        <div class="col-12">    
            <h1 class="d-flex justify-content-center p-3 border-bottom"> Faite une offre </h1> <br>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-3">
        </div>
        
        <div class="col-xl-6 col-md-12 d-flex justify-content-center"> 
        
            <div class="card stylecard">  
                <div class="card-body">
                <form method="POST" action="{{ route ('offer.store') }}">
                    <div class="form-group">
                    @csrf
                
                    <input class="d-flex justify-content-center form-control" type="hidden" name="user_id" value="{{ $test }}"><br>
                    <label class="d-flex justify-content-center lead" for="email"> Veuillez saisir votre email </label>

                    <div class="d-flex justify-content-center p-1">
                    <input type="email" name="email" size="30" id=email required ><br>
                    </div>

                    <label class="d-flex justify-content-center lead" for="title"> Veuillez saisir le titre de votre offre </label>

                    <div class="d-flex justify-content-center p-1">
                    <input class="d-flex justify-content-center" type="text" name="title" size="30" id=title required><br><br>
                    </div>
                    @if ($errors->first('title'))
                    <div class="alert alert-danger">
                    <p> titre trop long </p>
                    </div>
                        
                    @endif 
                    <label class="d-flex justify-content-center lead" for="desc"> Veuillez saisir la description de l'offre </label>

                    <div class="d-flex justify-content-center p-1">
                    <textarea class="d-flex justify-content-center" id="Tiny-text" name="content" id=desc  rows="6" cols="50" required></textarea><br>
                    </div>
                    @if ($errors->first('content'))
                    <div class="alert alert-danger">
                    <p> Description de l'offre trop long </p>
                    </div>
                        
                    @endif 
                    
                    <label class="d-flex justify-content-center lead" for="select"> Veuillez choisir la région de l'offre </label>
                    <div class="d-flex justify-content-center p-1">
                    <SELECT class="d-flex justify-content-center m-1" name="region" id=select size="1" required><br>
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
                    <label class="d-flex justify-content-center lead" for="ville"> Veuillez saisir la ville de l'offre </label>
                    <div class="d-flex justify-content-center p-1">
                    <input class="d-flex justify-content-center" type="text" id=ville name="ville" size="30" required><br>
                    @if ($errors->first('ville'))
                    <div class="alert alert-danger">
                    <p> Nom de la ville trop long </p>
                    </div>
                        
                    @endif 
                    </div>
                    <div class="d-flex justify-content-center p-1">
                    <button class="d-flex justify-content-center btn btn-primary mt-3" type="submit"> Soumettre l'offre</button><br>
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
</div>
@endsection