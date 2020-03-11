<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCounty extends Model
{
  protected $guarded=[];

  public function county(){
  	return $this->belongsTo(\App\County::class,'county_id');
  }
}
