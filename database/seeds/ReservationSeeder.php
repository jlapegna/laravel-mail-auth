<?php

use Illuminate\Database\Seeder;

use App\Reservation;
use App\Room;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Reservation::class, 100)
              -> make()
              -> each(function($reservation) {
            $room = Room::inRandomOrder() -> first();
            $reservation -> room() -> associate($room);
            $reservation -> save();
        });
    }
}
