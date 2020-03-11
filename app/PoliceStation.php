<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoliceStation extends Model
{
    //police offierts

    public function officers() {
      return $this->hasMany(\App\User::class,'police_station_id');
    }
//get the cases r3eported to this police post

  public function crimes() {
    return $this->hasMany(\App\Crime::class,'police_station_id');
  }

    public function subcounty() {
    return $this->belongsTo(\App\SubCounty::class,'sub_county_id');
  }

}
