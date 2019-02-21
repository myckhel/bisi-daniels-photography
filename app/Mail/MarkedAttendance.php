<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Event;
use App\Attendance;

class MarkedAttendance extends Mailable
{
    use Queueable, SerializesModels;
    protected $event, $attendance;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Event $event, Attendance $attendance)
    {
        //
        $this->event = $event;
        $this->attendance = $attendance;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->from('hello@cvms.trueworthfabrics.com.ng', 'CVMS')
      ->subject('Attendance Marked')
      // >replyTo('hello@cvms.trueworthfabrics.com.ng', 'No reply')
      ->with([
          'event' => $this->event,
          'attendance' => $this->attendance,
          'url' => route('attendance.history')
        ])
      ->markdown('mail.marked');
    }
}
