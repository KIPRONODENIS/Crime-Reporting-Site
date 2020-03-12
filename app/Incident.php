<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
  protected $guarded=[];

  public function person() {
  	return $this->belongsTo(\App\WantedPerson::class,'wanted_person_id');
  }

    public function reporter() {
  	return $this->belongsTo(\App\User::class,'user_id');
  }
}
