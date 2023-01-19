<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hs_id');
            $table->foreign('hs_id')->references('id')->on('hs');

            $table->unsignedBigInteger('director_id');
            $table->foreign('director_id')->references('id')->on('directors');

            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries');

            $table->unsignedBigInteger('region_id');
            $table->foreign('region_id')->references('id')->on('regions');

            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');

            $table->string('name',255);
            $table->string('postal');
            $table->string('phone');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('email2')->unique();
            $table->string('website');
            $table->string('fax');
            $table->string('address');
            $table->string('address_short');
            $table->decimal('latitude');
            $table->decimal('longitude');
            $table->string('plan_preference')->default('anual');
            $table->tinyInteger('leads');
            $table->enum("business_status", ["OPERATIONAL","CLOSED_PERMANENTLY"]);// <-- Aquí el enum
            $table->tinyInteger('google_user_ratings_total');
            $table->decimal('google_rating');
            $table->string('revisor');
            $table->boolean('active')->default(0);
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
        Schema::dropIfExists('schools');
    }
}
