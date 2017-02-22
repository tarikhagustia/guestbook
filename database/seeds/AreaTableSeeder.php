<?php

use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "Security Pos",
            "Workshop 1",
            "Workshop 2",
            "Hangar 1",
            "Hangar 2",
            "Engine Shop",
            "Material Building",
            "GSE Building",
            "Facility Building",
            "Marketing Building",
            "IWWT Building"
        ];
        foreach($data as $row):
         DB::table('area')->insert([
            'name' => $row
         ]);
        endforeach;
    }
}
