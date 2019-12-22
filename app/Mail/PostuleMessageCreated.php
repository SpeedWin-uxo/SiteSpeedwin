<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PostuleMessageCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $postule;


  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($postule)
  {

        $this->postule = $postule;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
        return $this->from('uxo.digital@gmail.com')->markdown('emails.messages.postule')->subject('Demande demploi ')->with('postule', $this->postule);


  }
}
