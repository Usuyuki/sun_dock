<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'content'=>'コメント！！',
            'sunDock_id'=>1,
            'identifier_id'=>2,
        ];
        DB::table("comments")->insert($param);
    }
}