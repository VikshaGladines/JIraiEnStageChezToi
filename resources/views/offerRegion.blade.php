@extends('base')

@section('content')
<div>
    @foreach ($offerRegion as $offer)
        <p> {{ $offer->title }} {{ $offer->email }} {{ $offer->ville }} {{ $offer->content }}</p>

                 
    @endforeach


    <p> TESTTTTTTTTTTTTTTTTTTTT </p>
</div>
@endsection