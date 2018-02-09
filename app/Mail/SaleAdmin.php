<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SaleAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $client_name;
    public $book_name;
    public $txn;
    public $client_email;
    public $client_phone;

    public function __construct($client_name = "", $book_name = "", $txn = "", $client_email = "", $client_phone = "")
    {
        $this->client_name = $client_name;
        $this->book_name = $book_name;
        $this->txn = $txn;
        $this->client_email = $client_email;
        $this->client_phone = $client_phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.sale_admin');
    }

}
