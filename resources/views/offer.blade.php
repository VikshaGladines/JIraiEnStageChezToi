@extends('base')

@section('content')
<div class="container-fluid">
  <div class="row mb-3">

      
    {{--<p style="text-align: center"> <a href=" {{route('home') }}" >revenir en arrière </a></p>--}}
    <div class="col-3">
    </div>
    <div class="col-6">
      <div class="card d-flex justify-content-xl-center mt-5 mb-5 styleoffers">  
        <div class="card-body">
          <div class="border-bottom">
            <h2 class="card-title border-bottom pb-2 text-primary"> {{ $offer->title }} </h2> 
            <h5 class="card-title d-flex justify-content-center font-weight-bold"> Description de l'offre </h5>
            <p class="card-text d-flex justify-content-end" style="position: relative; right: 44px;" > <img class="imageUser" src="/uploads/avatars/{{ $offer->User->avatar }}"> </p>
            <p class="card-text d-flex justify-content-end" style="position: relative; right: 50px;"> {{$offer->User->name}}</p> 
            <p class="card-text d-flex justify-content-end"> <button class="btn btn-primary"> <a class="text-white" href=" {{route('messages.create', $offer->id) }}"> envoyez un message</a> </button></p>
            
            <div class="col-8">
              <p class="card-text" style="position: relative; bottom: 140px;"> {{ $offer->content }} </p>
            </div>
            @if (Auth::user())

            @if (Auth::user()->id == $offer->user_id)
            <div class="d-flex justify-content-center">
            <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <input type="hidden" name="offer_id" value="{{ $offer->id }}"><br>
                  <div class="d-flex justify-content-center m-1">
                    <label for="image" class="lead">Choisir des images</label>
                  </div>
                  <div class="">
                      <input type="file" name="image" id="image">
                  </div>
       
                  <div class="d-flex justify-content-center m-3">
                      <button type="submit" class="btn btn-primary">Charger l'image</button>
                  </div>
       
              </div>
          </form>
        </div>
            @endif
              
          @endif
          @foreach ($image as $images)
         
          <div class="card m-3">
            @if (Auth::user())
                
            @if (Auth::user()->id == $offer->user_id)
                
           
            <div class="d-flex justify-content-end">
            <button type="button" style="" class="btn btn-danger p-2 m-1" onclick="document.getElementById('model-open').style.display='block'"> Supprimer </button>
            <form action={{ route('image.destroy', $images->id) }} method="POST">
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
                  <p class="d-flex justify-content-center">Êtes-vous sur de vouloir supprimer cette image ?</p> 
                  <button type="submit" class="btn btn-primary text-white"> Je suis sûr </button>
                </div>
              </div>
              <div class="col-2">
              </div>
            </div>
          
          </div> 
          </form>
        </div>
        @endif
        @endif
            <div class="card-body d-flex justify-content-center">
              <img class="" src="/uploads/avatars/{{ $images->image }}">
            </div>
          </div>
          @endforeach
          
          </div>  

          
           <div class="col-12 d-flex justify-content-center pt-5 border-bottom pb-3">
         
         
        <form method="POST" action="{{ route('comment.store') }}">
            <div class="form-group">
                @csrf
                <h3> Laisser un commentaire ! </h3> <br>
                <input class="form-control form-control-sm" type="hidden" name="offer_id" value="{{ $offer->id }}">

                <label for="title">Titre</label>
                <input class="form-control form-control-sm" type="text" name="title" size="30" id="title" required>
                <label for="desc">Commentaire</label>
                <textarea  class="md-textarea form-control" id="desc" name="content" rows="4" cols="30" required></textarea> <br>
                <div class="col text-center">
                  <button class="btn btn-primary" type="submit">Je commente !</button>
                </div>
            </div>
        </form>
      </div>
      
      <div class="card-body d-flex justify-content-center text-primary">
        <div class="border-bottom">
          <h4>  Commentaire </h4>
        </div>
      </div>
      @foreach ($comments as $comments)
      <div class="mt-4 mb-4">
      <div>
       <h4> <img class="imageUsercomments" src="/uploads/avatars/{{ $comments->user->avatar }}">  &nbsp; &nbsp; <u> {{ $comments->user->name }} </u></h4>
        
      </div>
        <div class="card">
          <div class="card-body">
            <h4 class="card-title font-weight-bold"> {{ $comments->title }} </h4>
            
            <p class="card-text" style="font-size: 19px">{{ $comments->content }} </p>
           
        </div>
      </div>
          @endforeach
    </div>
  
        </div>
      </div> 
    </div>  
    <div class="col-3">
    </div>
  </div>
  <div class="row">
    {{--<p>{{ $comment->content }}</p>--}}
      
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