<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DevisMessageCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $devis;


  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($devis)
  {

        $this->devis = $devis;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
        return $this->from('uxo.digital@gmail.com')->markdown('emails.messages.devis')->subject('Demande Devis ')->with('devis', $this->devis);


  }
}
