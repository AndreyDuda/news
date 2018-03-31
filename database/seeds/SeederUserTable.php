<?php

use Illuminate\Database\Seeder;

class SeederUserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [//password 123456
                [
                    'name'     => 'user1',
                    'email'    => 'user1@gmail.com',
                    'password' => '$2y$10$UN/QeftQP5ONnnKoyfRxPui3hnyP5.8fIlgT1QBUsSjYWAHy0Uv0W'
                ],
                [
                    'name'     => 'user2',
                    'email'    => 'user2@gmail.com',
                    'password' => '$2y$10$UN/QeftQP5ONnnKoyfRxPui3hnyP5.8fIlgT1QBUsSjYWAHy0Uv0W'
                ],
                [
                    'name'     => 'user3',
                    'email'    => 'user3@gmail.com',
                    'password' => '$2y$10$UN/QeftQP5ONnnKoyfRxPui3hnyP5.8fIlgT1QBUsSjYWAHy0Uv0W'
                ]
            ]);
    }
}
