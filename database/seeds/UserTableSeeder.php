<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $credentials = [
          'email'    => 'agustia.tarikh150@gmail.com',
          'password' => '1234',
        ];

        $user = Sentinel::registerAndActivate($credentials);
    }
}
