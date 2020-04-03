
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::table("reservations", function (Blueprint $table){
      $table -> bigInteger("room_id") -> unsigned() -> index();
      $table -> foreign("room_id", 'reservations_rooms')
      -> references('id')
      -> on('rooms');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table("reservations", function (Blueprint $table){
      $table -> dropForeign("reservations_rooms");
      $table -> dropColumn("room_id");
    });
  }
}
