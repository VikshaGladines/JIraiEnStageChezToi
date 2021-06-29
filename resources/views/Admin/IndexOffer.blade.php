@extends('base')

@section('content')
<div class="container-fluid">
  <div class="row mb-3">
    <div class="col-3">
    </div>
    <div class="col-6">
        <h2 class="p-3"style="text-align: center"> Espace Admin  </h2>
        <h2 class="p-3"style="text-align: center"> Offres  </h2>
            @foreach ($IndexOffer as $offer)
            <div class="card mb-5">
            <div class="card-body">
              <h3 class="card-title border-bottom pb-2"> <a href=" {{ route('offer', $offer->slug) }}"> {{ $offer->title }} </a> </h3> 
              <span class="d-inline-flex justify-content-end p-2 text-right"> <button class="btn btn-danger pb-2 pt-2 pr-3 pl-3"> <a class=" text-white" href="{{ route('offer.edit', $offer->id) }}"> Editer </a> </button></span> 
              <span class="d-inline-flex justify-content-end p-2 text-right"><button type="button" class="btn btn-primary p-2" onclick="document.getElementById('model-open').style.display='block'"> Supprimer </button></span>
              <p class="d-flex justify-content-end">{{ $offer->created_at->format('d/m/Y') }} </p> 
              <p class="d-flex justify-content-end">fait par : {{ $offer->User->name }} </p> 
              <form action={{ route('offer.delete', $offer->id) }} method="POST">
                  @csrf
                  @method("DELETE")
                  <div id="model-open" class="modal">
                    
                      <div class="row" style="position: relative; top: 400px;">
                        <div class="col-2">
                        </div>
                        <div class="col-8">
                        <div class="modal-content">
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                          <span style="" class="close p-2" onclick="document.getElementById('model-open').style.display='none'">&times;</span>
                          </button>
                          <p class="d-flex justify-content-center">Êtes-vous sur de vouloir supprimer cet article ?</p> 
                          <button type="submit" class="btn btn-danger text-white"> Je suis sur </button>
                        </div>
                      </div>
                      <div class="col-2">
                      </div>
                    </div>
                  
                  </div>
              </form> 
             </div>
        </div>      
            @endforeach
            <h2 class="p-3"style="text-align: center"> Demandes </h2>

            @foreach ($demande as $demandes)
            <div class="card mb-5">
            <div class="card-body">
              <h3 class="card-title border-bottom pb-2"> {{ $demandes->title }} </h3> 
              <span class="d-inline-flex justify-content-end p-2 text-right"> <button class="btn btn-danger pb-2 pt-2 pr-3 pl-3"> <a class=" text-white" href="{{ route('demande.edit', $demandes->id) }}"> Editer </a> </button></span> 
              <span class="d-inline-flex justify-content-end p-2 text-right"><button type="button" class="btn btn-primary p-2" onclick="document.getElementById('model-open').style.display='block'"> Supprimer </button></span>
              <p class="d-flex justify-content-end">{{ $demandes->created_at->format('d/m/Y') }} </p> 
              <form action={{ route('demande.delete', $demandes->id) }} method="POST">
                  @csrf
                  @method("DELETE")
                  <div id="model-open" class="modal">
                    
                      <div class="row" style="position: relative; top: 400px;">
                        <div class="col-2">
                        </div>
                        <div class="col-8">
                        <div class="modal-content">
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                          <span style="" class="close p-2" onclick="document.getElementById('model-open').style.display='none'">&times;</span>
                          </button>
                          <p class="d-flex justify-content-center">Êtes-vous sur de vouloir supprimer cet demande ?</p> 
                          <button type="submit" class="btn btn-danger text-white"> Je suis sur </button>
                        </div>
                      </div>
                      <div class="col-2">
                      </div>
                    </div>
                  
                  </div>
              </form> 
             </div>
        </div>      
            @endforeach
           
    </div>
      <div class="col-3">
      </div>
</div>














</div>


<script>
// Get the modal
var modal = document.getElementsByClassName("modal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
@endsection