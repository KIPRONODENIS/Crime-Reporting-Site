<?php

use Illuminate\Database\Seeder;
use App\County;
class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      County::create([
        "county"=>"Meru County"

      ]);

      County::create([
        "county"=>"Uasin Gishu County"

      ]);
    }
}
