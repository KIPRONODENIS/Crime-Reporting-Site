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
            $table->string('status')->default('pending');
            $table->text('description');
            $table->bigInteger('police_station_id');
            $table->datetime('date_lost');
            $table->timestamps();
        });

 MissingPerson::create([

'name'=>"Web Coder Skull",
'location'=>"Meru",
'image'=>'team2.png',
'description'=>"
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

",
'police_station_id'=>'1',
'date_lost'=>new Carbon("yesterday")
 ]);
   
 MissingPerson::create([

'name'=>"Web Coder Skull1",
'location'=>"Nairobi",
'image'=>'team2.png',
'police_station_id'=>'1',
'description'=>"
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

",
'date_lost'=>new Carbon("yesterday")
 ]);

 MissingPerson::create([

'name'=>"Web Coder Skull1",
'location'=>"Nairobi",
'image'=>'team2.png',
'police_station_id'=>'1',
'description'=>"
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

",
'date_lost'=>new Carbon("yesterday")
 ]);
 

 MissingPerson::create([

'name'=>"Web Coder Skull",
'location'=>"Meru",
'image'=>'team2.png',
'description'=>"
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

",
'police_station_id'=>'1',
'date_lost'=>new Carbon("yesterday")
 ]);
   
 MissingPerson::create([

'name'=>"Web Coder Skull1",
'location'=>"Nairobi",
'image'=>'team2.png',
'description'=>"
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

",
'police_station_id'=>'1',
'date_lost'=>new Carbon("yesterday")
 ]);

 MissingPerson::create([

'name'=>"Web Coder Skull1",
'location'=>"Nairobi",
'image'=>'team2.png',
'description'=>"
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

",
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
