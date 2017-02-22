<?php

use Illuminate\Database\Seeder;

class CardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('card')->insert([
            'uid' => "UID",
            'is_active' => true
         ]);
    }
}
