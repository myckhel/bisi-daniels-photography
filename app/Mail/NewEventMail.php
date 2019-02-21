<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Event;
use App\Attendance;
use App\User;

class NewEventMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $event, $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Event $event, User $user)
    {
        //
        $this->event = $event;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('hello@cvms.trueworthfabrics.com.ng', 'CVMS')
        ->subject('New Attendance Available')
        ->with([
            'event' => $this->event,
            'url' => route('api.mark', ['user_id' => $this->user->id, 'event_id' => $this->event->id])
          ])
        ->markdown('mail.NewEvent');
    }
}
