<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use NotificationChannels\WebPush\WebPushMessage;
use NotificationChannels\WebPush\WebPushChannel;
use Illuminate\Support\Carbon;
class WebNotice extends Notification
{
    use Queueable;
    public $title, $body, $action, $url;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($title, $body, $url)
    {
        //
        $this->title = $title;
        $this->body = $body;
        $this->url = $url;
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
            ->action('Close', 'close')
            ->data(['id' => $notification->id, 'url' => $this->url]);
    }

}
