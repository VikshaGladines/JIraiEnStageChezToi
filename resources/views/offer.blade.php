@extends('base')

@section('content')
<p style="text-align: center"> <a href=" {{route('home') }}" >revenir en arrière </a></p>
<h1>
{{ $offer->title }}

<h2>
<p> {{ $offer->content }} </p> 

<p style="text-align: right">  <a href=" {{route('messages.create', $offer->id) }}"> envoyez un message</a> </p>

<br>
<br>

  {{--<p>{{ $comment->content }}</p>--}}
<form method="POST" action="{{ route('comment.store') }}">
    <hr>
    <div>
        @csrf
        <h1> Laisser un commentaire ! </h1> <br>
        <input type="hidden" name="offer_id" value="{{ $offer->id }}">
        <p>username</p> <input type="text" name="username" size="30" required>
    
        <p>mail</p> <input type="email" name="email" size="30" required>
    
        <p>title</p> <input type="text" name="title" size="30" required>
        
        <p>description :</p> <textarea id="Tiny-text" name="content" rows="10" cols="70" required></textarea>
    
        <p><input type="submit"  value="Je commente !"></p>
    </div>
    </form>

<h3> Commentaire </h3>
@foreach ($comments as $comments)
<p> {{ $comments->username }}</p>
<p> {{ $comments->content }}</p>

@endforeach

@endsection