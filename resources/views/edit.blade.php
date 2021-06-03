@extends('base')

@section('content')
<form method="POST" action="{{ route('offer.update', $offer->id) }}">
    @csrf
    @method("PUT")
    <div>
        <h1> Modifier l'offre </h1> <br>
    
        <p>mail</p> <input type="email" value="{{ $offer->email }}" name="email" size="30" required>
    
        <p>title</p> <input type="text" value="{{ $offer->title }}" name="title" size="30" required>
        
        <p>description :</p> <textarea id="Tiny-text" name="content" rows="10" cols="70" required>{{ $offer->content }}</textarea>
    
        <p>region</p> <SELECT name="region" value="{{ $offer->region }}" size="1" required>
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
        </SELECT>
        <p>ville</p> <input type="text" value="{{ $offer->ville }}" name="ville" size="30" required>
        <p><input type="submit" value="modifier"></p>
    </div>
    </form>
@endsection