<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_configs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo');
            $table->string('phone_number');
            $table->string('loadingimage');
            $table->string('email');
            $table->string('facebook');
            $table->string('google');
            $table->string('twitter');
            $table->string('insta');
            $table->string('snapchat');
            $table->string('youtube');
            $table->string('android');
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('ios');  
            $table->timestamps();
        });

        Schema::create('site_config_translations', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('site_config_id')->unsigned();

            $table->text('about');
            $table->string('location');

            $table->string('locale')->index();

            $table->unique(['site_config_id','locale']);
            $table->foreign('site_config_id')->references('id')->on('site_configs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_configs');
    }
}
