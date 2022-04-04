<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('accountType');
            $table->string('avatarSrc');
            $table->string('fullName');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('contactNumber');
            $table->string('addressLineOne');
            $table->string('addressLineTwo');
            $table->string('addressState');
            $table->string('addressCode');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
