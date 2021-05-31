<?php

namespace Database\Seeders;

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
            'list' => 'aaa'
        ];
        DB::table('todos')->insert($param);
        $param = [
            'list' => 'あああ'

        ];
        DB::table('todos')->insert($param);
    }
}
