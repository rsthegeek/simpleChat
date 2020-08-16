<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;

class ResetPassword extends ResetPasswordNotification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('بازنشانی رمز عبور')
                    ->line('شما این ایمیل را به این علت دریافت کرده‌اید که ما درخواست بازنشانی رمز عبور حساب کاربری شما را دریافت نموده‌ایم.')
                    ->action('بازنشانی رمز عبور', url('password/reset', $this->token))
                    ->line('در صورتی که شما این درخواست را ارسال ننموده‌اید نیازی نیست کاری انجام دهید.');
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
