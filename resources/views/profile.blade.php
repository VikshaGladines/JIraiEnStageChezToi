@extends('base')

@section('content')
<div class="container-fluid">     
  <div class="row mb-3">
    <div class="col-3">
      
    </div>  
    <div class="col-xl-6 col-sm-12">
      <h1 class="pt-3 " style="text-align: center"> Votre profil </h1>
     
      <div class="card d-flex justify-content-center mt-5 "> 
            <div class="card-body p-5 "> 
              <div class="row" >
              <div class="col-6">
                <div class="col-xl-6 col-md-12">
                  
                    <h2 class="card-title border border-primary d-flex justify-content-center p-1" style="position: relative; left: 0px;">  {{ Auth::user()->name }}</h2>
                  
                </div>
                <div class="pb-2">
                  <img class="d-flex justify-content-center p-2 border-bottom" src="/uploads/avatars/{{ $profile->avatar }}" style="width:100px; height:100px; border-radius:50%; position: relative; left: 50px;">
                </div>
                      <form class="p-3"enctype="multipart/form-data" action={{ route ('profile.store') }} method="POST">
                          @csrf
                          <input type="file" name="avatar"><br> <br>
                          <div class="d-flex justify-content-start">
                          <input type="submit" class=" btn btn-sm btn-primary" >
                          </div> 
                    </form>
                </div>
            
          <div class="col-xl-6 col-md-12">  
            <div class="d-flex justify-content-center p-2 border-bottom">
              <h3 class="card-title"> Information personnelle </h3>
            </div><br>

            <h5 class="p-1"> Adresse mail :  </h5>
            <div class="card">
              <span class="align-middle d-flex justify-content-center p-2">  {{ Auth::user()->email }}</span>
            </div>
            <h5 class="pt-2 pb-1"> Ville d'étude :  </h5>
            <div class="card ">
              <span class="align-middle d-flex justify-content-center pt-2 pb-2">  {{ Auth::user()->city }}</span>
            </div>
            <h5 class="pt-2 pb-1"> Niveau d'étude :  </h5>
            <div class="card ">
              <span class="align-middle d-flex justify-content-center pt-2 pb-2">  {{ Auth::user()->level }}</span>
                 </div>
              </div>
           </div>
        </div>  
      </div>
    </div>        
  </div>
    <div class="row">
        <div class="col-3">
        </div>
          <div class="col-xl-6 col-md-12">  
            <h2 class="d-flex justify-content-center p-2"> Description personelle </h2>
            <div class="card"> 
             
              <div class="card-body">
               
                <p class="card-text"> {{ Auth::user()->description }} </p>
              </div>
            </div>
          </div> 

        
          <div class="col-3">
        </div>
      </div>
      <div class="row">
        <div class="col-3">
        </div>
        <div class="col-xl-6 col-md-12">
            <h2 class="p-3"style="text-align: center"> Vos Offres </h2>
           
                @foreach ($offer as $offers) 
                <div class="card mb-5">
                <div class="card-body">
                  <h3 class="card-title border-bottom pb-2"> <a href=" {{ route('offer', $offers->slug) }}"> {{ $offers->title }} </a> </h3> 
                  <span class="d-inline-flex justify-content-end p-2 text-right"> <button class="btn btn-danger pb-2 pt-2 pr-3 pl-3"> <a class=" text-white" href="{{ route('offer.edit', $offers->id) }}"> Editer </a> </button></span> 
                  <span class="d-inline-flex justify-content-end p-2 text-right"> <button type="button" class="btn btn-primary p-2" onclick="document.getElementById('model-open').style.display='block'"> Supprimer </button> </span>
                  <p class="d-flex justify-content-end ">{{ $offers->created_at->format('d/m/Y') }} </p> 
                  <form action={{ route('offer.delete', $offers->id) }} method="POST">
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
               
        </div>
          <div class="col-3">
          </div>
</div>



          <div class="row">
            <div class="col-3">
            </div>
            <div class="col-6">
                <h2 class="p-3"style="text-align: center"> Vos Demandes </h2>
               
                    @foreach ($demandes as $demande) 
                    <div class="card mb-5">
                    <div class="card-body">
                      <h3 class="card-title border-bottom pb-2">{{ $demande->title }} </a> </h3> 
                      <span class="d-flex justify-content-end p-2" style="position: relative; right: 72px; bottom: 68px;"> <button class="btn btn-danger pb-2 pt-2 pr-3 pl-3"> <a class=" text-white" href="{{ route('demande.edit', $demande->id) }}"> Editer </a> </button></span> 
                      <button type="button" style="position: relative; left: 840px; bottom: 117px;" class="btn btn-primary p-2" onclick="document.getElementById('model-open').style.display='block'"> Supprimer </button>
                      <p class="d-flex justify-content-end">{{ $demande->created_at->format('d/m/Y') }} </p> 
                      <form action={{ route('demande.delete', $demande->id) }} method="POST">
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
                   
            </div>
              <div class="col-3">
              </div>
      
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementsId("model-open");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close");

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