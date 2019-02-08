<?php

use Illuminate\Database\Seeder;

class typeUserTableSeeder extends Seeder
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
				'name' => "User",
				'created_at' => new DateTime,
                'updated_at' => null,	
			],
			[
				'name' => "Handler",
				'created_at' => new DateTime,
                'updated_at' => null,
			];
									
		];
		DB::table('typeUser')->insert($dummy_values);
    }
}
