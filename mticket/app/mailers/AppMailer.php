<?php
namespace App\Mailers;

use App\Models\Ticket;
use Illuminate\Contracts\Mail\Mailer;

class AppMailer {
    protected $mailer; 
    protected $fromAddress = 'customersupport@supportticket.lk';
    // protected $fromAddress = 'kithminirkw@gmail.com';
    protected $fromName = 'Customer Support Platform';
    protected $to;
    protected $subject;
    protected $view;
    protected $data = [];

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendTicketInformation(Ticket $ticket)
    {
        $this->to = $ticket->email;
        $this->subject = "[Ticket ID: $ticket->ticket_id] $ticket->title";
        $this->view = 'emaillbody.email_ticket_info';
        $this->data = compact('ticket');

        return $this->deliver();
    }

    public function deliver()
    {
        $this->mailer->send($this->view, $this->data, function($message) {
            $message->from($this->fromAddress, $this->fromName)
                    ->to($this->to)->subject($this->subject);
        });
    }

    public function sendTicketComments(Ticket $ticket)
    {
        $this->to = $ticket->email;
        $this->subject = "RE: [Ticket ID: $ticket->ticket_id]";
        $this->view = 'emaillbody.ticket_response';
        $this->data = compact('ticket');

        return $this->deliver();
    }
}