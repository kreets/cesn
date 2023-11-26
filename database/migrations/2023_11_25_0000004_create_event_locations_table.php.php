<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('event_locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('zip');
            $table->string('city');
            $table->string('address');
            $table->string('map_info')->nullable(); // For Google Maps or similar
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_locations');
    }
}
