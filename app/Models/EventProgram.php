<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventProgram extends Model
{
    protected $fillable = ['event_day_id', 'title', 'start_time', 'end_time', 'performer', 'description', 'image', 'event_location_id'];
    const PLACEHOLDER = "https://placehold.it/800x860";

    public function eventDay()
    {
        return $this->belongsTo(EventDay::class);
    }

    public function location()
    {
        // If this program has a location, return it
        if ($this->event_location_id) {
            return $this->belongsTo(EventLocation::class, 'event_location_id');
        }

        // Otherwise, return the location of the related event
        return $this->eventDay->event->location();
    }

    public function getImage(){
        return $this->image ?? self::PLACEHOLDER;
    }
}
