<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\MissingPerson;
use Carbon\Carbon;
class CreateMissingPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missing_people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('location');
            $table->string('image');
            $table->bigInteger('police_station_id');
            $table->datetime('date_lost');
            $table->timestamps();
        });

 MissingPerson::create([

'name'=>"Web Coder Skull",
'location'=>"Meru",
'image'=>'team2.png',
'police_station_id'=>'1',
'date_lost'=>new Carbon("yesterday")
 ]);
   
 MissingPerson::create([

'name'=>"Web Coder Skull1",
'location'=>"Nairobi",
'image'=>'team2.png',
'police_station_id'=>'1',
'date_lost'=>new Carbon("yesterday")
 ]);

 MissingPerson::create([

'name'=>"Web Coder Skull1",
'location'=>"Nairobi",
'image'=>'team2.png',
'police_station_id'=>'1',
'date_lost'=>new Carbon("yesterday")
 ]);
 

 MissingPerson::create([

'name'=>"Web Coder Skull",
'location'=>"Meru",
'image'=>'team2.png',
'police_station_id'=>'1',
'date_lost'=>new Carbon("yesterday")
 ]);
   
 MissingPerson::create([

'name'=>"Web Coder Skull1",
'location'=>"Nairobi",
'image'=>'team2.png',
'police_station_id'=>'1',
'date_lost'=>new Carbon("yesterday")
 ]);

 MissingPerson::create([

'name'=>"Web Coder Skull1",
'location'=>"Nairobi",
'image'=>'team2.png',
'police_station_id'=>'1',
'date_lost'=>new Carbon("yesterday")
 ]);
 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('missing_people');
    }
}
