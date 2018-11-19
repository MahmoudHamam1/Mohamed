<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsiteimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websiteimages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('About');
            $table->string('entertainment');
            $table->string('education');
            $table->string('services');
            $table->string('hotel_tourism');
            $table->string('footer1')->nullable();
            $table->string('footer2')->nullable();
            $table->string('footer3')->nullable();
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
        Schema::dropIfExists('websiteimages');
    }
}
