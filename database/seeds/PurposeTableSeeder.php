<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PurposeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "visit",
            "benchmark",
            "audit",
            "investigation",
            "daily working",
            "Other"
        ];
        foreach($data as $row):
         DB::table('purpose')->insert([
            'name' => $row
         ]);
        endforeach;
    }
}
