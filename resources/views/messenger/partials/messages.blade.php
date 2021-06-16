<div class="col-12">
    
@if ((Auth::user()->name) == $message->user->name)
<div class="row  mb-3">
    <div class="col-12">
        <div class="d-flex justify-content-end p-5">
        <div class="col-4 card  d-flex justify-content-end">
        <div class="card-body">
            <h3 class="card-title d-flex justify-content-center border-bottom pb-3">{{ $message->user->name }}</h3> 
               
            <p class="card-text d-flex justify-content-center">{{ $message->body }}</p>
                
                    <p class="d-flex justify-content-center"> {{ $message->created_at->format('d/m/Y H:i') }}</p>
        </div>   
    </div>
    </div>
</div>
    
    
</div>
 @endif

 @if ((Auth::user()->name) != $message->user->name)
 <div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-start p-5">
        <div class="col-4 card  d-flex justify-content-start">
        <div class="card-body">
            
            <h3 class="card-title d-flex justify-content-end border-bottom" style="">{{ $message->user->name }}<img class="" src="/uploads/avatars/{{ $message->user->avatar }}" style="width:50px; height:50px; border-radius:50%; position: relative; bottom:12px; left: 10px;"></h3> 
               
                <p class="card-text d-flex justify-content-center">{{ $message->body }}</p> 
                
                    <p class="d-flex justify-content-center"> {{ $message->created_at->format('d/m/Y H:i') }}</p>
        </div>   
    </div>
    </div>
</div>
 @endif

</div>