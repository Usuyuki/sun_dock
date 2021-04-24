<?php

namespace Database\Seeders;

use App\Models\Identifier;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class IdentifierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'identifier'=>Str::uuid(),
        ];
        DB::table("identifiers")->insert($param);
    }
}