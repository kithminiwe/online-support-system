@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ticket Information') }}</div>

                <div class="card-body">
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    
                                    
                                    @if ($ticket == null)
                                        <p>Invalid Reference</p>
                                    @else
                                           
                                            <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label for="ticketid" class="control-label">Ticket ID</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input disabled id="ticketid" type="text" class="form-control" name="ticketid" value="{{ $ticket->ticket_id }}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label for="createdat" class="control-label">Created Date</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input disabled id="createdat" type="text" class="form-control" name="name" value="{{ $ticket->created_at }}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label for="name" class="control-label">Name</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input disabled id="name" type="text" class="form-control" name="name" value="{{ $ticket->name }}">
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label for="status" class="control-label">Status</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input disabled id="status" type="text" class="form-control" name="status" value="{{ $ticket->status }}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label for="message" class="control-label">Message</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input disabled id="message" type="text" class="form-control" name="message" value="{{ $ticket->message }}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label for="response" class="control-label">Response</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input disabled id="response" type="text" class="form-control" name="response" value="{{ $ticket->response }}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label for="responsedt" class="control-label">Response Date</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input disabled id="responsedt" type="text" class="form-control" name="responsedt" value="{{ $ticket->updated_at }}">
                                                </div>
                                            </div>

                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
