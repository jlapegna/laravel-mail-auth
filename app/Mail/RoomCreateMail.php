<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RoomCreateMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    private $roomnum;
    private $floornum;
    private $bednum;
    public function __construct($roomnum, $floornum, $bednum)
    {
      $this -> roomnum = $roomnum;
      $this -> floornum = $floornum;
      $this -> bednum = $bednum;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $roomnum = $this -> roomnum;
        $floornum = $this -> floornum;
        $bednum = $this -> bednum;
        return $this->view('mail.createroommail', compact("roomnum", "floornum", "bednum"));
    }
}
