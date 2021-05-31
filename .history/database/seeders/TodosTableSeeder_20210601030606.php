<?php

namespace Database\Seeders;

use App\Http\Controllers\TodoController;
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
            'content' => 'aaa',
            'created_at' => new Datetime(),
            'deleted_at' => new DateTime()

        ];
        DB::table('todos')->insert($param);
        $param = [
            'content' => 'あああ',
            'created_at' => new Datetime(),
            'deleted_at' => new DateTime()

        ];
        DB::table('todos')->insert($param);
    }
    public function run(){
        $this->call(Todo)
    }
}
