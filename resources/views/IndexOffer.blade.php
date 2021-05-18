@extends('base')

@section('content')
<div>
    @foreach ($IndexOffer as $offer)
        <p> {{ $offer->title }} {{ $offer->email }} {{ $offer->ville }} {{ $offer->content }}</p>

                 
    @endforeach
</div>
@endsection