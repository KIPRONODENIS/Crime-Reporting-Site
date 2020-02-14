<?php

use Illuminate\Database\Seeder;
use App\Crime;
class CrimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  Crime::create([
    'title'=>"Road Accident",
    'type'=>'Emergency',
    'police_station_id'=>1,
    'county_id'=>1,
    'user_id'=>1,
    'sub_county_id'=>1,
    'area'=>"Kitembene",
    'description'=>'Lorem ipsum dolor sit amet,
    consectetur adipisicing elit, sed do eiusmod tempor '
  ]);

  Crime::create([
    'title'=>"Emergency Fire",
    'type'=>'Emergency',
    'police_station_id'=>3,
    'county_id'=>1,
      'user_id'=>1,
    'sub_county_id'=>2,
    'area'=>"Maua",
    'description'=>'Lorem ipsum dolor sit amet,
    consectetur adipisicing elit, sed do eiusmod tempor '
]);

  Crime::create([
    'title'=>"Emergency Fire",
    'type'=>'Emergency',
    'police_station_id'=>5,
    'county_id'=>1,
      'user_id'=>1,
    'sub_county_id'=>3,
    'area'=>"Maua",
    'description'=>'Lorem ipsum dolor sit amet,
    consectetur adipisicing elit, sed do eiusmod tempor '
  ]);

  Crime::create([
    'title'=>"Terrorism",
    'type'=>'Emergency',
    'police_station_id'=>5,
    'county_id'=>1,
      'user_id'=>1,
    'sub_county_id'=>3,
    'area'=>"Maua",
    'description'=>'Lorem ipsum dolor sit amet,
    consectetur adipisicing elit, sed do eiusmod tempor '
  ]);
    }
}
