@extends('base')

@section('content')
<div>
  <h1 style="text-align: center"> Espace Administrateur </h1>
    @foreach ($IndexOffer as $offer)
        <h1> <a href=" {{ route('offer', $offer->slug) }}"> {{ $offer->title }} </a> </h1>  
        <p>{{ $offer->email }} | {{ $offer->content }} | {{ $offer->ville }}</p>
        <a href="{{ route('offer.edit', $offer->id) }}"> edit </a>
        <button type="button" class="btn btn_danger" onclick="document.getElementById('myModal-{{ $offer->id }}').style.display='block'"> delete </button>
        <form action={{ route('offer.delete', $offer->id) }} method="POST">
            @csrf
            @method("DELETE")
            <div id="myModal-{{ $offer->id }}" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                  <span class="close">&times;</span>
                  <p>Êtes-vous sur de vouloir supprimer cet article ?</p>
                </div>
              
              
              <button type="submit"> yep je suis sur </button>
            </div>
        </form>

                 
    @endforeach
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