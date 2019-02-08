<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
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
				'name' => "Kids Event",
				'created_at' => new DateTime,
                'updated_at' => null,	
			],
			[
				'name' => "Housewarming Event",
				'created_at' => new DateTime,
                'updated_at' => null,
			],
			[
				'name' => "Surprise Event",
				'created_at' => new DateTime,
                'updated_at' => null,
			],
						
		];
		DB::table('event')->insert($dummy_values);
    }
}
