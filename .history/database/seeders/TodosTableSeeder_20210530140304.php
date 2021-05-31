<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => 'aaa'
        ];
        DB::table('todos')->insert($param);
        $param = [
            'content' => 'あああ'
            'creared_at' => new DateTime();

        ];
        DB::table('todos')->insert($param);
    }
}
