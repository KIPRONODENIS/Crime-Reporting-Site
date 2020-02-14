<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            $role = "admin";

            User::create([
                'name'           => 'Admin',
                'email'          => 'test@test.com',
                'password'       => bcrypt('12345678'),
                'remember_token' => Str::random(60),

                'phone'=>'0799012907'
            ]);
        }



    }

}
