@extends('base')

@section('content')
<div>
    @foreach ($demande as $demandes)
    <p> {{ $demandes->title }}</p>
        
    @endforeach
</div>
@endsection