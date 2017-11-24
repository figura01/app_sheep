<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\User::class, 5)->create();

        DB::Table('users')->insert([
            [
               'name' => 'Laurent',
               'email' => 'laurent@laurent.fr',
               'password' => Hash::make('Laurent'),
            ],
            [
               'name' => 'Eric',
               'email' => 'eric@eric.fr',
               'password' => Hash::make('Eric'),
            ],
            [
               'name' => 'Younes',
               'email' => 'younes@v.fr',
               'password' => Hash::make('Younes'),
            ]
        ]);
    }
}
