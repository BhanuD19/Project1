<?php

use Illuminate\Database\Seeder;

class typeStatusTableSeeder extends Seeder
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
				'name' => "Initiated",
				'created_at' => new DateTime,
                'updated_at' => null,	
			],
			[
				'name' => "Followup",
				'created_at' => new DateTime,
                'updated_at' => null,
			],
			[
				'name' => "Confirmed",
				'created_at' => new DateTime,
                'updated_at' => null,
			],
			
			[
				'name' => "Cancelled",
				'created_at' => new DateTime,
                'updated_at' => null,			
			]
						
		];
		 DB::table('typeStatus')->insert($dummy_values);
    }
}
