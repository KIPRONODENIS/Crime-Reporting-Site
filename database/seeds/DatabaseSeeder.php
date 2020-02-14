<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

       $this->call(UsersTableSeeder::class);
       $this->call(CountySeeder::class);
       $this->call(SubCountyTableSeeder::class);
       $this->call(PoliceStationTableSeeder::class);
       $this->call(CrimeTableSeeder::class);

    }
}
