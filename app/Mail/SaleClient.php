<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SaleClient extends Mailable
{
    use Queueable, SerializesModels;

    public $client_name;
    public $book_name;
    public $txn;

    public function __construct($client_name = "", $book_name = "", $txn = "")
    {
        $this->client_name = $client_name;
        $this->book_name = $book_name;
        $this->txn = $txn;
    }


    public function build()
    {
        return $this->view('emails.sale')->subject("New Book Purchase");
    }
}
