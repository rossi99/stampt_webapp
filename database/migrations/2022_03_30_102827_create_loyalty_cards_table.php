<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoyaltyCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loyalty_cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description');
            $table->text('reward');
            $table->text('progressMethod');
            $table->string('logoPosition');
            $table->string('logoShape');
            $table->integer('stampsRequired');
            $table->integer('stampSlots');
            $table->string('backgroundColour');
            $table->string('fontColour');
            $table->string('status');
            $table->integer('slotOne');
            $table->integer('slotTwo');
            $table->integer('slotThree');
            $table->integer('slotFour');
            $table->integer('slotFive');
            $table->integer('slotSix');
            $table->integer('slotSeven');
            $table->integer('slotEight');
            $table->integer('slotNine');
            $table->integer('slotTen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loyalty_cards');
    }
}
