<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use NotificationChannels\WebPush\WebPushMessage;
use NotificationChannels\WebPush\WebPushChannel;
use Illuminate\Support\Carbon;
class NewEventNotification extends Notification
{
    use Queueable;
    public $title, $body, $action, $url, $user_id, $event_id;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($title, $body, $user_id, $event_id)
    {
        //
        $this->title = $title;
        $this->body = $body;
        $this->user_id = $user_id;
        $this->event_id = $event_id;
        // $this->url = $url;
        // $this->action = $action;
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

    public function toWebPush($notifiable, $notification)
    {
        return (new WebPushMessage)
            ->title($this->title)
            ->icon(url('/push.png'))
            ->body($this->body)
            ->action('Yes', 'yes')
            ->action('No', 'no')
            ->data(['id' => $notification->id, 'url' => route('mark'), 'user_id' => $this->user_id, 'event_id' => $this->event_id, 'token' => csrf_token()]);
    }

}
