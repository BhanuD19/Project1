<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$dummy_values = [
			[
				'name' => "Bengaluru",
				'created_at' => new DateTime,
                'updated_at' => null,	
			],
			[
				'name' => "Mumbai",
				'created_at' => new DateTime,
                'updated_at' => null,
			],
			[
				'name' => "Hyderabad",
				'created_at' => new DateTime,
                'updated_at' => null,
			],
			[
				'name' => "Pune",
				'created_at' => new DateTime,
                'updated_at' => null,
			]
						
		];
		DB::table('City')->insert($dummy_values);
    }
}
