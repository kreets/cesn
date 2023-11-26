<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventProgramsTable extends Migration
{
    public function up()
    {
        Schema::create('event_programs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_day_id')->constrained('event_days');
            $table->string('title');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('performer')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('event_location_id')->constrained('event_locations');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_programs');
    }
}
