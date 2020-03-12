<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LostCase extends Model
{
    protected $guarded=[];

      public function person() {
  	return $this->belongsTo(\App\MissingPerson::class,'missing_person_id');
  }

    public function reporter() {
  	return $this->belongsTo(\App\User::class,'user_id');
  }
}
