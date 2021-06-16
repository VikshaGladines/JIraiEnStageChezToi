
<div class="row  mb-3">
    <div class="col-3">
    </div>
    <div class="col-6">
    <div class="card mt-5">
    <?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>
    <div class="card-body">
    
        
            <div class="card-title ">
            <h2 class="d-flex justify-content-center border-bottom pb-2"> <a href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }} </a> &nbsp; &nbsp;({{ $thread->userUnreadMessagesCount(Auth::id()) }} unread)</h2>
            
        </div>
        <div class="card-text">
           <p> Dernier message : <p class="text-danger"> {{ $thread->latestMessage->body }} <p> </p>
        </div>
        <p> 
            <div class="card-text d-flex justify-content-end">
            <p>Creator: {{ $thread->creator()->name }}</p>
            </div>
        </p>
        <p>
            <div class="card-text d-flex justify-content-end">
            <p>Participants: {{ $thread->participantsString(Auth::id()) }}</p>
            </div>
        </p>
    
</div>
</div>
</div>
<div class="col-3">
</div>
</div>
