<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use NotificationChannels\WebPush\WebPushMessage;
use NotificationChannels\WebPush\WebPushChannel;
use Illuminate\Support\Carbon;
class GenericNotification extends Notification
{
    use Queueable;
    public $title, $body, $action;

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

    // public function toWebPush($notifiable, $notification)
    // {
    //   $time = \Carbon\Carbon::now();
    //     return (new WebPushMessage)
    //         // ->id($notification->id)
    //         ->title($this->title)
    //         ->icon(url('/push.png'))
    //         ->body($this->body)
    //         ->action('View Account', 'view_account');
    // }

    public function toWebPush($notifiable, $notification)
    {
        return (new WebPushMessage)
            ->title($this->title)
            ->icon(url('/push.png'))
            ->body($this->body)
            ->action('View', 'view_app')
            ->data(['id' => $notification->id, 'url' => route('home'), 'user_id' => 1, 'event_id' => 2]);
    }

}
