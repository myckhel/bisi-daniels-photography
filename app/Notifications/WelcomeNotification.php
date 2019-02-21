<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use NotificationChannels\WebPush\WebPushMessage;
use NotificationChannels\WebPush\WebPushChannel;

class WelcomeNotification extends Notification
{
    use Queueable;
    public $title, $body;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
     public function __construct($title, $body)
     {
         //
         $this->title = $title;
         $this->body = $body;
     }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [WebPushChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
     public function toWebPush($notifiable, $notification)
     {
         return (new WebPushMessage)
             ->title($this->title)
             ->icon('../push.png')
             ->body($this->body)
             ->action('View It', 'view_app')
             ->data(['id' => $notification->id, 'url' => route('home'), 'user_id' => 1, 'event_id' => 2]);
     }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
