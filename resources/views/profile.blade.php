@extends('base')

@section('content')
<div>       
    <h1 style="text-align: center"> Votre Profile </h1>
   
        <p style="text-align: center">  {{ Auth::user()->name }}</p>
        <p style="text-align: center">  {{ Auth::user()->id }}</p>
        <p style="text-align: center">  {{ Auth::user()->email }}</p>
        <img src="/uploads/avatars/{{ $profile->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
        <form enctype="multipart/form-data" action={{ route ('profile.store') }} method="POST">
          <label>Choisissez votre photo de profile</label>
          @csrf
          <input type="file" name="avatar">
          <input type="submit" class="pull-right btn btn-sm btn-primary">
      </form>
        <br>
        <hr>
        <h2 style="text-align: center"> Vos Offres </h2>
        
        @foreach ($offer as $offers)
        <h1> <a href=" {{ route('offer', $offers->slug) }}"> {{ $offers->title }} </a> </h1>  
        <p>{{ $offers->email }} | {{ $offers->content }} | {{ $offers->ville }}</p>
        <a href="{{ route('offer.edit', $offers->id) }}"> edit </a>
        <button type="button" class="btn btn_danger" onclick="document.getElementById('myModal-{{ $offers->id }}').style.display='block'"> delete </button>
        <form action={{ route('offer.delete', $offers->id) }} method="POST">
            @csrf
            @method("DELETE")
            <div id="myModal-{{ $offers->id }}" class="modal">

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
</div>
@endsection