<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoliceStation extends Model
{
    //police offierts

  protected $guarded=[];

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

   public function wanted() {
    return $this->hasMany(\App\WantedPerson::class,'police_station_id');
  }

     public function wantedcases() {
    return $this->hasMany(\App\Incident::class,'police_station_id');
  } 
      public function missingcases() {
    return $this->hasMany(\App\LostCase::class,'police_station_id');
  }

     public function missing() {
    return $this->hasMany(\App\MissingPerson::class,'police_station_id');
  }

}
