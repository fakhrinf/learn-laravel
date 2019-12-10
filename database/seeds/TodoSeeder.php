<?php

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            [
                'todo' => "Todo one",
            ],
            [
                'todo' => "Todo two",
            ],
            [
                'todo' => "Todo three",
            ]
        ]);
    }
}
