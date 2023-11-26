<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'slug', 'start_date', 'end_date', 'description', 'location'];

    public function eventDays()
    {
        return $this->hasMany(EventDay::class);
    }

    public function location()
    {
        return $this->belongsTo(EventLocation::class);
    }

    public function getDate($field = 'start_date'){
        return new Carbon($this->$field);
    }

    public function getEventDateRangeAttribute()
    {
        $firstEventDay = $this->eventDays()->orderBy('date')->first();
        $lastEventDay = $this->eventDays()->orderByDesc('date')->first();

        if (!$firstEventDay || !$lastEventDay) {
            return '';
        }

        $startDate = $firstEventDay->getDate(); // Using getDate() method on EventDay
        $endDate = $lastEventDay->getDate();

        setlocale(LC_TIME, 'hu_HU.UTF-8'); // Set locale for Hungarian

        // Format dates
        $startFormat = $startDate->formatLocalized('%d'); // Day only
        $endFormat = $endDate->formatLocalized('%d %B, %Y'); // Day, Month, Year

        // If the event is within the same month and year
        if ($startDate->format('Y-m') === $endDate->format('Y-m')) {
            return "$startFormat - $endFormat";
        }

        // Different month or year
        $startFormat .= ' ' . $startDate->formatLocalized('%B, %Y');
        return "$startFormat - $endFormat";
    }
}
