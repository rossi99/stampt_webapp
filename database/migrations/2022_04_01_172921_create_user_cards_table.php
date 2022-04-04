<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_cards', function (Blueprint $table) {
            $table->bigIncrements('id');

            // Linking a User to their Wallet: 1-to-1 Relationship
            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users');

            // Linking Cards that belong to a Wallet:
            $table->unsignedBigInteger('card_id')->index();
            $table->foreign('card_id')->references('id')->on('loyalty_cards');

            // Card progress
            $table->string('slotOneStatus');
            $table->string('slotTwoStatus');
            $table->string('slotThreeStatus');
            $table->string('slotFourStatus');
            $table->string('slotFiveStatus');
            $table->string('slotSixStatus');
            $table->string('slotSevenStatus');
            $table->string('slotEightStatus');
            $table->string('slotNineStatus');
            $table->string('slotTenStatus');

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
        Schema::dropIfExists('user_cards');
    }
}
