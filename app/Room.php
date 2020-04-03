<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
  protected $fillable = [

    "roomnumber",
    "floor",
    "beds"

];

public function reservations() {
    return $this -> hasMany(Reservation::class);
}
}
