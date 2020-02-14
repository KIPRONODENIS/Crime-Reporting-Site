<?php

use Illuminate\Database\Seeder;
use App\PoliceStation;
class PoliceStationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

  PoliceStation::create([
    'name'=>"Mariakani police post",
    'sub_county_id'=>1,
    'area'=>'kitembene',

  ]);
  PoliceStation::create([
    'name'=>"ADC police post",
    'sub_county_id'=>1,
    'area'=>'kiajai',

  ]);
  PoliceStation::create([
    'name'=>"Ameru police post",
    'sub_county_id'=>2,
    'area'=>'kimeru',

  ]);
  PoliceStation::create([
    'name'=>"ABC police post",
    'sub_county_id'=>2,
    'area'=>'Abas ',

  ]);
  PoliceStation::create([
    'name'=>"Turbo  police post",
    'sub_county_id'=>3,
    'area'=>'Turbo',

  ]);
  PoliceStation::create([
    'name'=>"Maua  police post",
    'sub_county_id'=>3,
    'area'=>'Turbo',

  ]);
  PoliceStation::create([
    'name'=>"Taps  police post",
    'sub_county_id'=>4,
    'area'=>'Riverside',

  ]);
  PoliceStation::create([
    'name'=>"Meru  police post",
    'sub_county_id'=>4,
    'area'=>'Meru Town',

  ]);
    }
}
