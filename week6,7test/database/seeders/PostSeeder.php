<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "name" => "taro"
        ];
        DB::table("post")->insert($param);

        $param = [
            "name" => "jiro"
        ];
        DB::table("post")->insert($param);

        $param = [
            "name" => "saburo"
        ];
        DB::table("post")->insert($param);
    }
}
