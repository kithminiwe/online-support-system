@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Search Ticket') }}</div>

                <div class="card-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/search') }}">
                    {!! csrf_field() !!}
                    
                    
                    <div class="row form-group{{ $errors->has('ticket_id') ? ' has-error' : '' }}">
                        
                        <div class="col-md-4">
                            <label for="ticket_id" class="control-label">Ticket ID</label>
                        </div>
                        <div class="col-md-8">
                            <input id="ticket_id" required type="text" class="form-control" name="ticket_id">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-ticket"></i> View Ticket
                            </button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
