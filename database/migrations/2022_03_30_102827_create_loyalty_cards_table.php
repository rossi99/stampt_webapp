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
            $table->id();
            $table->string('cardTitle');
            $table->text('cardDesc');
            $table->text('cardReward');
            $table->text('cardProgressMethod');
            $table->string('cardLogoPosition');
            $table->string('cardLogoShape');
            $table->integer('cardStampsRequired');
            $table->integer('cardNumOfStamps');
            $table->string('cardBackgroundColour');
            $table->string('cardFontColour');
            $table->integer('cardSlotOne');
            $table->integer('cardSlotTwo');
            $table->integer('cardSlotThree');
            $table->integer('cardSlotFour');
            $table->integer('cardSlotFive');
            $table->integer('cardSlotSix');
            $table->integer('cardSlotSeven');
            $table->integer('cardSlotEight');
            $table->integer('cardSlotNine');
            $table->integer('cardSlotTen');
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
