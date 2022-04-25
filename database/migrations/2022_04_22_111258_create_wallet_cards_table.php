<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet_cards', function (Blueprint $table) {
            $table->id();

            // Linking Cards that belong to a Wallet
            $table->unsignedBigInteger('card_id')->index();
            $table->foreign('card_id')->references('id')->on('loyalty_cards');

            // Card progress
            $table->string('slotOne');
            $table->string('slotTwo');
            $table->string('slotThree');
            $table->string('slotFour');
            $table->string('slotFive');
            $table->string('slotSix');
            $table->string('slotSeven');
            $table->string('slotEight');
            $table->string('slotNine');
            $table->string('slotTen');

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
        Schema::dropIfExists('wallet_cards');
    }
}
