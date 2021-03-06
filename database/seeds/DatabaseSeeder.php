<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(DatabasesTableSeeder::class);
        // $this->call(QueriesTableSeeder::class);
        // $this->call(Defined_BiesTableSeeder::class);
    }
}
