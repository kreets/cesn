<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventLocation extends  Model
{
    protected $fillable = ['name', 'zip', 'city', 'address', 'map_info'];

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }

    public function eventPrograms()
    {
        return $this->hasMany(EventProgram::class);
    }

    public function composedAddress(){
        return sprintf("%s %s, %s", $this->zip, $this->city, $this->address);
    }
}
