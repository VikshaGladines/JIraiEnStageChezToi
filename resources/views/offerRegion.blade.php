@extends('base')

@section('content')
<div class="container-fluid" style="background-image: url({{ asset('image/test2.png') }}); background-repeat: no-repeat;">
    <div class="row mb-3">
        <div class="col-6 border-right ">
           
        @if ($rien == false)
                <h3 class="d-flex justify-content-xl-center mb-5 p-5 border-bottom font-weight-bold text-Ableu"> Il n'y a pas d'offre de cette region</h3>
        @endif

        @if ($rien ==true) 
        <h3 class="d-flex justify-content-xl-center mb-5 p-5 font-weight-bold text-Ableu" >  Voici les offres </h3>

            @foreach ($offerRegion as $offer)
            <div class="d-flex justify-content-xl-center mt-5 mb-5">
                <div class="card border-bottom stylecard">
                    <div class="card-body">
                    <h4 class="card-title card-text d-flex justify-content-center p-2 border-bottom text-Ableu"> <a href=" {{ route('offer', $offer->slug) }}"> {{ $offer->title }} </a></h4> 
                    <p class="card-text d-flex justify-content-center p-2 pt-4 text-Ableu">{{ $offer->ville }}</p>   
                    <p class="card-text d-flex justify-content-end pr-2  pb-2 text-Ableu">{{ $offer->created_at->format('d/m/Y') }}</p>
                    <p class="card-text d-flex justify-content-start pr-2  pb-2 text-Ableu"> Fait par : {{ $offer->User->name }}</p>
                    </div>
                </div>    
        </div> 
            @endforeach 
        @endif
    </div>

        <div class="col-6">

        @if ($rien == false)
            <h3 class="d-flex justify-content-xl-center mb-5 p-5 border-bottom font-weight-bold text-Avert"> il n'y a pas de demande de cette region</h3>
        @endif
        @if ($rien ==true) 
        <h3 class="d-flex justify-content-xl-center mb-5 p-5 font-weight-bold text-Avert" >  Voici les demandes  </h3>
        @foreach ($demandRegion as $demand)
            <div class="d-flex justify-content-xl-center mt-5 mb-5">
                <div class="card border-bottom styleoffer">
                    <div class="card-body">
                    <h4 class="card-title card-text d-flex justify-content-center p-2 border-bottom text-Avert">  {{ $demand->title }} </a></h4> 
                    <p class="card-text d-flex justify-content-center pr-2  pb-2 text-Avert">{{ $demand->content }}</p>
                    <p class="card-text d-flex justify-content-center p-2 pt-4 text-Avert ">{{ $demand->ville }}</p>   
                    <p class="card-text d-flex justify-content-end pr-2  pb-2 text-Avert">{{ $demand->created_at->format('d/m/Y') }}</p>
                    <p class="card-text d-flex justify-content-end pr-2  pb-2 text-Avert"> contact : &nbsp;<u> {{ $demand->email }} </u></p>
                    <p class="card-text d-flex justify-content-start pr-2 pb-2 text-Avert"> Fait par : {{ $offer->User->name }}</p>
                   
                    </div>
                </div>    
        </div> 
            @endforeach 
            @endif
        </div>
    </div>
</div>
@endsection
