<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Sendmail_ThanhToanGH extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $sub;
    public $mess;
    public function __construct($subject,$message)
    {
        $this->sub=$subject;
        $this->mess=$message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_sub=$this->sub;
        $e_mess=$this->mess;

        return $this->view('admin/pages/sendmail_TT',compact('e_mess'))->subject($e_sub);
    }
}
