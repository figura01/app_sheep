<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(SpendTableSeeder::class);
        $this->call(PartTableSeeder::class);
        $this->call(TripTableSeeder::class);
        $this->call(BalanceTableSeeder::class);
    }
}
