<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ticket;
use App\Mailers\AppMailer;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::where('status', 'Open')->paginate(10);
        return view('pages.tickets', ['tickets' => $tickets]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/newticket');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,AppMailer $mailer)
    {
        $this->validate($request, [
            'name'     => 'required',
            'email'  => 'required',
            'tel'  => 'required',
            'message'   => 'required'
        ]);

        $current_timestamp = Carbon::now()->timestamp; 
    
        $ticket = new Ticket([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'tel' => $request->input('tel'),
            'message'   => $request->input('message'),
            'ticket_id' => $current_timestamp.''.strtoupper(str_random(10)),
            'status'    => "Open",
            'is_view' => 'No',
            'response' =>'',
        ]);

        $ticket->save();

        // $mailer->sendTicketInformation($ticket);

        return redirect()->back()->with("status", "Ticket opened. Ticket ID: $ticket->ticket_id");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket = Ticket::where('ticket_id', $id)->first();
        return view('pages.viewticket', ['ticket'=> $ticket]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $affected = DB::table('tickets')
              ->where('ticket_id', $id)
              ->update(['is_view'=>'Yes','agent_id'=>Auth::user()->id]);

        
        $ticket = Ticket::where('ticket_id', $id)->first();
        return view('pages.addresponse', ['ticket'=> $ticket]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'response'     => 'required',
        ]);

        $affected = DB::table('tickets')
              ->where('ticket_id', $id)
              ->update(['response' => $request->input('response'),'status'=>'Closed','is_view'=>'Yes','agent_id'=>Auth::user()->id]);
        
        $ticket = Ticket::where('ticket_id', $id)->first();
        return view('pages.viewticket',["status"=> "Ticket closed successfully. Ticket ID: $id",'ticket'=>$ticket]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function searchpage(){
        return view('pages/searchticket');
    }
    
    public function search(Request $request)
    {

        $ticket_id = $request->input('ticket_id');
        
        /* Do something with data */
  
        $ticket = Ticket::where('ticket_id', $ticket_id)->first();
        return view('pages.viewticket', ['ticket'=> $ticket]);
    }


    public function tblsearch(Request $request)
    {
        
        $cname = $request->input('cname');
        
        /* Do something with data */
  
        $tickets = Ticket::where([['status', '=','Open'],['name','=', $cname]])->paginate(10);
        
        return view('pages.tickets', ['tickets' => $tickets]);
                
    }
}
