@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Customer Support System') }}</div>

                <div class="card-body">
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    
                                    @include('pages.message')

                                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/tickets') }}">
                                            {!! csrf_field() !!}

                                            
                                            <div class="row form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                
                                                <div class="col-md-4">
                                                    <label for="name" class="control-label">Customer Name</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                                    @if ($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <div class="col-md-4">
                                                    <label for="email" class="control-label">Email Address</label>
                                                </div>

                                                <div class="col-md-8">
                                                    <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}">

                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                                                <div class="col-md-4">
                                                    <label for="tel" class="control-label">Phone Number</label>
                                                </div>


                                                <div class="col-md-8">
                                                    <input id="tel" type="text" class="form-control" name="tel" value="{{ old('tel') }}">

                                                    @if ($errors->has('tel'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('tel') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            

                                        
                                            <div class="row form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                                <div class="col-md-4">
                                                    <label for="message" class="control-label">Message</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <textarea rows="5" id="message" class="form-control" name="message"></textarea>

                                                    @if ($errors->has('message'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('message') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-8 col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fa fa-btn fa-ticket"></i> Open Ticket
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    
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
