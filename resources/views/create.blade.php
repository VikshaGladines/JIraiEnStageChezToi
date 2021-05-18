@extends('base')

@section('content')
<form method="POST" action="{{ route ('offer.store') }}">
<div>
    @csrf
    <h1> Faite Une offre </h1> <br>

    <p>mail</p> <input type="email" name="email" size="30" required>

    <p>title</p> <input type="text" name="title" size="30" required>
    
    <p>description :</p> <textarea name="content" rows="10" cols="70" required></textarea>

    <p>region</p> <SELECT name="region" size="1" required>
        <OPTION>Auvergne-Rhone-Alpes
        <OPTION>Bourgogne-Franche-Comté
        <OPTION>Bretagne
        <OPTION>Centre-Val de Loire
        <OPTION>Corse
        <OPTION>Grand Est
        <OPTION>Hauts-de-France
        <OPTION>Ile-de-France (évité)
        <OPTION>Normandie
        <OPTION>Nouvelle-Aquitaine
        <OPTION>Occitanie
        <OPTION>Pays de la Loire
        <OPTION>Provence-Alpes-Côte d’Azur
    </SELECT>
    <p>ville</p> <input type="text" name="ville" size="30" required>
    <p><input type="submit"></p>
</div>
</form>

@endsection