@extends('base')

@section('content')
<div class="container-fluid">
    <div class="row  mb-3">
        <div class="col-12"> 
            <h1 class="d-flex justify-content-center">{{ $thread->subject }}</h1>
        </div>
    </div> 
    <div class="row">
    <div class="col-4">
    </div>
    <div class="col-4">
        <div class="card">
            @each('messenger.partials.messages', $thread->messages, 'message')
                
            @include('messenger.partials.form-message')
        </div>
    </div>
    <div class="col-4">
    </div>
    </div>
</div>
</div>   
@stop
