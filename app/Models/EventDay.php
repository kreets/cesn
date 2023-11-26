<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class EventDay extends Model
{
    protected $fillable = ['name', 'date', 'event_id', 'start_time', 'end_time'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function eventPrograms()
    {
        return $this->hasMany(EventProgram::class);
    }

    public function getDate($format = null){
        $date = new Carbon($this->date);
        return $format ? $date->format($format) : $date;
    }
}
