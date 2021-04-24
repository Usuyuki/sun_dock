<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SunDockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'content'=>'コメント1！！',
            'reaction_count_heart'=>1,
            'reaction_count_cheer'=>2,
            'reaction_count_tear'=>3,
            'identifier_id'=>1,
        ];
        DB::table("sun_docks")->insert($param);
        $param=[
            'content'=>'コメント2！！',
            'reaction_count_heart'=>1,
            'reaction_count_cheer'=>2,
            'reaction_count_tear'=>3,
            'identifier_id'=>2,
        ];
        DB::table("sun_docks")->insert($param);
    }
}