<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_number');
            $table->integer('card_id')->nullable();

            $table->string('name');
            $table->string('phone_number');
            $table->string('nationality');
            $table->string('country');
            $table->string('district');
            $table->string('email');
            $table->string('birthdate');
            $table->string('status')->nullable();

            $table->string('deliver_date')->nullable();
            $table->string('expire_date')->nullable();

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('cards');
    }
}
