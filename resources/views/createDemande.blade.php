@extends('base')

@section('content')
<form method="POST" action="{{ route ('demand.store') }}">
<div>
    @csrf
    <h1> Faite Une Demande </h1> <br>
    <input type="hidden" name="user_id" value="{{ $createdemande }}">
    <p>mail</p> <input type="email" name="email" size="30" required>

    <p>title</p> <input type="text" name="title" size="30" required>
    
    <p>description :</p> <textarea id="Tiny-text" name="content" rows="10" cols="70" required></textarea>

    <p>region</p> <SELECT name="region" size="1" required>
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
    <p>ville</p> <input type="text" name="ville" size="30" required>
    <p><input type="submit"></p>
</div>
</form>

@endsection