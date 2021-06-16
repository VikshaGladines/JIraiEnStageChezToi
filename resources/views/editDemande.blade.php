@extends('base')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-12">    
            <h1 class="d-flex justify-content-center p-3 border-bottom"> Modifier votre Demande </h1> <br>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
        </div>
        
        <div class="col-6 d-flex justify-content-center"> 
        
            <div class="card stylecard">  
                <div class="card-body">
                <form method="POST" action="{{ route('demande.update', $demandes->id) }}">
                    <div class="form-group">
                        @method("PUT")
                    @csrf
                    <input type="hidden" class="d-flex justify-content-center form-control" name="user_id" value="{{ $demandes->user_id }}">
                   
                    <label class="d-flex justify-content-center lead"  for="email"> Modifier votre email </label>

                    <div class="d-flex justify-content-center p-1">
                    <input type="email" name="email" size="30" value="{{ $demandes->email }}" id=email required ><br>
                    </div>

                    <label class="d-flex justify-content-center lead" for="title"> Modifier le titre de la demande </label>

                    <div class="d-flex justify-content-center p-1">
                    <input class="d-flex justify-content-center" type="text" value="{{ $demandes->title }}" name="title" size="30" id=title required><br><br>
                    </div>

                    <label class="d-flex justify-content-center lead" for="desc"> Modifier la description de la demande </label>

                    <div class="d-flex justify-content-center p-1">
                    <textarea class="d-flex justify-content-center" id="Tiny-text" name="content" id=desc  rows="6" cols="50" required>{{ $demandes->content }}</textarea><br>
                    </div>
                    @if($errors->any())
                    <div class="text-danger d-flex justify-content-center lead">{{ implode('', $errors->all('Description trop long')) }}</div>
                    @endif
                    
                    <label class="d-flex justify-content-center lead" for="select"> Modifier la région de la demande </label>
                    <div class="d-flex justify-content-center p-1">
                    <SELECT class="d-flex justify-content-center m-1" value="{{ $demandes->region }}" name="region" id=select size="1" required><br>
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
                    <label class="d-flex justify-content-center lead" for="ville">Modifier la ville de la demande </label>
                    <div class="d-flex justify-content-center p-1">
                    <input class="d-flex justify-content-center" type="text" value="{{ $demandes->ville }}" id=ville name="ville" size="30" required><br>
                    </div>
                    <div class="d-flex justify-content-center p-1">
                    <button class="d-flex justify-content-center btn btn-primary mt-3" type="submit"> Modifier</button><br>
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