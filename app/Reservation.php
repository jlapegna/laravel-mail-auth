<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room;

class Reservation extends Model
{
  protected $fillable = [

    'guestname',
    'date',
    'guestcount'
  ];

  public function room(){

    return $this -> belongsTo(Room::class);
  }
}
