<?php

use Illuminate\Database\Seeder;

class IdtypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "Citizen ID",
            "Driving License",
            "Passport",
            "student",
            "Other"            
        ];
        foreach($data as $row):
         DB::table('idtype')->insert([
            'name' => $row
         ]);
        endforeach;
    }
}
