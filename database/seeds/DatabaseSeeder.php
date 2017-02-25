<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PurposeTableSeeder::class);
        $this->call(AreaTableSeeder::class);
        $this->call(IdtypeTableSeeder::class);
        $this->call(CardTableSeeder::class);
        $this->call(UserTableSeeder::class);

    }
}
