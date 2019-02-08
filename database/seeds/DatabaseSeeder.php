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
        $this->call([
		UserTableSeeder::class;
		TicketTableSeeder::class;
		CityTableSeeder::class;
		EventTableSeeder::class;
		typeStatusTableSeeder::class;
		typeUserTableSeeder::class;
		
		]);
	}
}
