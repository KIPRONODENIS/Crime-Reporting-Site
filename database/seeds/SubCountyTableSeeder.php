<?php

use Illuminate\Database\Seeder;
use App\SubCounty;
class SubCountyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      SubCounty::create([
        "name"=>"igembe sub County",
        'county_id'=>1

      ]);

      SubCounty::create([
        "name"=>"Turbo sub County",
        'county_id'=>1

      ]);
      SubCounty::create([
        "name"=>"Eldoret north sub County",
        'county_id'=>2

      ]);

      SubCounty::create([
        "name"=>"Kianjai sub County",
        'county_id'=>2

      ]);
    }
}
