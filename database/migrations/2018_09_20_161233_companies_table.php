<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone_number_1');
            $table->string('phone_number_2')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->unique();
            $table->string('snapchat')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instgram')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->boolean('verified')->default(false);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        Schema::create('company_translations', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned();

            $table->string('name')->nullable();
            $table->string('description', 2000)->nullable();
            $table->string('address')->nullable();

            $table->string('locale')->index();

            $table->unique(['company_id','locale']);
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });
    }




    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
