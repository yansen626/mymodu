<?php
/**
 * Created by PhpStorm.
 * User: GMG-Developer
 * Date: 15/09/2017
 * Time: 14:44
 */

namespace App\Notifications;


use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewOrder extends Notification
{
    /**
     * undocumented class variable
     *
     * @var string
     **/
    //public $user;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
//    public function __construct($user)
//    {
//        $this->user = $user;
//    }
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
        return (new MailMessage())
            ->from('hellbardx333@gmail.com', 'Admin')
            ->subject('Testing')
            ->markdown('email.new-order');
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