@extends('base')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-6 border-right ">
           
        @if ($rien == false)
                <h4 class="d-flex justify-content-xl-center mb-5 p-5 border-bottom"> il n'y a pas d'offre de cette region</h4>
        @endif

        @if ($rien ==true) 
        <h3 class="d-flex justify-content-xl-center mb-5 p-5" >  Voici les offres </h3>

            @foreach ($offerRegion as $offer)
            <div class="d-flex justify-content-xl-center mt-5 mb-5">
                <div class="card border-bottom stylecard">
                    <div class="card-body">
                    <h4 class="card-title card-text d-flex justify-content-center p-2 border-bottom"> <a href=" {{ route('offer', $offer->slug) }}"> {{ $offer->title }} </a></h4> 
                    <p class="card-text d-flex justify-content-center p-2 pt-4 text-danger">{{ $offer->ville }}</p>   
                    <p class="card-text d-flex justify-content-end pr-2  pb-2 text-orange">{{ $offer->created_at->format('d/m/Y') }}</p>
                    <p class="card-text d-flex justify-content-start pr-2  pb-2"> Fait par : {{ $offer->User->name }}</p>
                    </div>
                </div>    
        </div> 
            @endforeach 
        @endif
    </div>

        <div class="col-6">

        @if ($rien == false)
            <h4 class="d-flex justify-content-xl-center mb-5 p-5 border-bottom"> il n'y a pas de demande de cette region</h4>
        @endif
        @if ($rien ==true) 
        <h3 class="d-flex justify-content-xl-center mb-5 p-5 " >  Voici les demandes  </h3>
        @foreach ($demandRegion as $demand)
            <div class="d-flex justify-content-xl-center mt-5 mb-5">
                <div class="card border-bottom styleoffer">
                    <div class="card-body">
                    <h4 class="card-title card-text d-flex justify-content-center p-2 border-bottom">  {{ $demand->title }} </a></h4> 
                    <p class="card-text d-flex justify-content-center pr-2  pb-2">{{ $demand->content }}</p>
                    <p class="card-text d-flex justify-content-center p-2 pt-4 text-danger ">{{ $demand->ville }}</p>   
                    <p class="card-text d-flex justify-content-end pr-2  pb-2 text-orange">{{ $demand->created_at->format('d/m/Y') }}</p>
                    <p class="card-text d-flex justify-content-end pr-2  pb-2 text-rose"> contact : &nbsp;<u> {{ $demand->email }} </u></p>
                    <p class="card-text d-flex justify-content-start pr-2  pb-2"> Fait par : {{ $offer->User->name }}</p>
                   
                    </div>
                </div>    
        </div> 
            @endforeach 
            @endif
        </div>
    </div>
</div>
@endsection
