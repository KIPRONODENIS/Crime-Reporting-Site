<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class MissingPerson extends Model
{
    protected $guarded=[];

    public function getTimeAttribute(){
return new Carbon($this->date_lost);
    }

       public function station(){
    	return $this->belongsTo(\App\PoliceStation::class,'police_station_id');
    }
}
