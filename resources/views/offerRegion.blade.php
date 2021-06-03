@extends('base')

@section('content')
<div>
    @foreach ($offerRegion as $offer)
        <p> <a href=" {{ route('offer', $offer->slug) }}"> {{ $offer->title }} </a></p> <p>{{ $offer->email }} {{ $offer->ville }} {{ $offer->content }}</p>

                 
    @endforeach

    @foreach ($demandRegion as $demand)
        <p> {{ $demand->title }} </a></p> <p>{{ $demand->email }} {{ $demand->ville }} {{ $demand->content }}</p>

                 
    @endforeach
   

</div>
@endsection