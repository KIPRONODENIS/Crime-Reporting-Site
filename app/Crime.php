<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crime extends Model
{
    protected $guarded=[];

    //lest link each with police Station

    public function station(){
      return $this->belongsTo(\App\PoliceStation::class,'police_station_id');
    }
}
