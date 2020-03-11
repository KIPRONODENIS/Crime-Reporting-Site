<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WantedPerson extends Model
{
    protected $guarded=[];

    public function station(){
    	return $this->belongsTo(\App\PoliceStation::class,'police_station_id');
    }
}
