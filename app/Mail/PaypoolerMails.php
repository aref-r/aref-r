<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\models\Ticket;


class PaypoolerMails extends Mailable
{
    use Queueable, SerializesModels;
    public $subject;
    public $view;
    public $user;
    public $case;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($view, $subject, $user, $case)
    {
        $this->view = $view;
        $this->subject = $subject;
        $this->user = $user;
        $this->case = $case;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown($this->view)->from(env('MAIL_USERNAME'))->subject($this->subject)->with(['user' => $this->user, 'case' => $this->case]);
    }
}
