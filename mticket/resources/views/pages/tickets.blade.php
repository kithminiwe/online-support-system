@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Open Tickets') }}</div>

                <div class="card-body">
                <div class="container">

                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/tblsearch') }}">
                                        {!! csrf_field() !!}
                                        <div class="form-inline">
                                        <label for="cname" class="control-label">Filter by Customer Name    :</label>
                                        <input id="cname" required type="text" class="" name="cname">
                                        <button type="submit" class="btn btn-sm btn-primary">Search </button>
                                        </div>
                                    </form>

                                    @if (count(array($tickets))==0)
                                        <p>Currently there are no any opened tickets</p>
                                    @else

                                    
                                    <br>
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Added Date</th>
                                                    <th>Cutomer Name</th>
                                                    <th>Ticket ID</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($tickets as $ticket)
                                                <tr>
                                                    
                                                    <td>{{ $ticket->created_at }}</td>
                                                    <td>{{ $ticket->name }}</td>
                                                    <td>
                                                        @if ($ticket->is_view === 'No')
                                                        <b>
                                                        @endif
                                                        <a href="{{ url('tickets/'. $ticket->ticket_id.'/edit') }}">
                                                            {{ $ticket->ticket_id }}
                                                        </a>
                                                        @if ($ticket->is_view === 'No')
                                                            </b>
                                                        @endif
                                                    </td>
                                                    
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                        {{ $tickets->render() }}
                                    @endif
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection