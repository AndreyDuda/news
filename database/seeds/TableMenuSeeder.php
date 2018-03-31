<?php

use Illuminate\Database\Seeder;

class TableMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('menus')->insert(
            [//password 123456
                [
                    'title'     => 'Главная',
                    'url'       => '/',
                ],
                [
                    'title'     => 'Кабинет',
                    'url'       => '/user',
                ]

            ]);
    }
}
