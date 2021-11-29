<?php

namespace App\Notifications;

use App\Book;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewBookAddedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    
    private  $book;
    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    
    public function via($notifiable)
    {
        return ['database','mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)->markdown('emails.book.NewBook',['book'=>$this->book])->subject('Send me html');
    }


    public function toArray($notifiable)
    {
        return $this->book;
    }

}
