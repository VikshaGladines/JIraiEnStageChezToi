@extends('base')
@include('messenger.partials.flash')
@section('content')

<div class="container-fluid">
<h2 class="d-flex justify-content-center pt-3"> Messagerie <h2>      
          
@each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')
           
    
</div>
@endsection
    

