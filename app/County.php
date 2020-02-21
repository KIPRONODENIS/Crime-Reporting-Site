<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    protected $guarded=[];

    public function subcounties(){
      return $this->hasMany(\App\SubCounty::class,'county_id');
    }
}
