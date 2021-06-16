@extends('base')

@section('content')
<div class="container-fluid">
        <div class="row">
                <div class="col-3">
                </div>
            <div class="col-6">
            <h1 class="d-flex justify-content-center">Creer un nouveau fil de discussion</h1>
            
            <form action="{{ route('messages.store') }}" method="post">
                {{ csrf_field() }}
                
                    <!-- Subject Form Input -->
                    <div class="form-group">
                        <label class="control-label d-flex justify-content-center">Sujet</label>
                        <div class="d-flex justify-content-center">
                        <input type="text" class="form-control " name="subject" placeholder="Subject"
                            value="{{ old('subject') }}">
                        </div>
                    

                    <!-- Message Form Input -->
                    <div class="form-group">
                        <label class="control-label d-flex justify-content-center">Message</label>
                        <div class="d-flex justify-content-center">
                        <textarea name="message" class="form-control d-flex justify-content-center">{{ old('message') }}</textarea>
                        </div>
                    </div>

                    @if($users->count() > 0)
                    <div class="d-flex justify-content-center">
                        <div class="checkbox">
                        
                                <label title=" {{$offer->User->name}}" class="d-flex justify-content-center"><input type="checkbox" name="recipients[]" required
                                                                        value="{{$offer->user_id}}">{!!$offer->User->name!!} </label>
                                                                                                                    
                        </div>
                    </div>
                    @endif
            
                    <!-- Submit Form Input -->
                    <div class="form-group">
                        <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary form-control d-flex justify-content-center">Submit</button>
                        </div>
                    </div>
                </div>
            
            </form>
        </div>
        <div class="col-3">
        </div>
        </div>   
</div>
@stop
