<?php

namespace App\Channels;

use Illuminate\Notifications\Notification;

class ResetPasswordChannel
{
    protected $token;
    /**
     * Send the given notification.
     *
     * @param  mixed  $notifiable
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        $token = $notification->toMobile($notifiable);

        // Send notification to the $notifiable instance...
    }
}