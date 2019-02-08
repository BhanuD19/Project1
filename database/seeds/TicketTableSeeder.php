<?php

use Illuminate\Database\Seeder;

class TicketTableSeeder extends Seeder
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
                    'user_id' => 1, 
					'event_date' =>1/2/2018,
					'event_id' => 1, 
					'city_id' =>1, 
					'handler_id' =>4, 
					'booking_amount' => 2100,
					'paid_at' => "Online", 
					'ticket_status' => 1,
					'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'user_id' => 3, 
					'event_date' =>10/3/2018,
					'event_id' => 2, 
					'city_id' =>2, 
					'handler_id' =>2, 
					'booking_amount' => 2200,
					'paid_at' => "Online", 
					'ticket_status' => 3,
					'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'user_id' => 5, 
					'event_date' =>15/4/2018,
					'event_id' => 3, 
					'city_id' =>3, 
					'handler_id' =>4, 
					'booking_amount' => 2300,
					'paid_at' => "Offline", 
					'ticket_status' => 2,
					'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'user_id' => 7, 
					'event_date' =>15/3/2018,
					'event_id' => 4, 
					'city_id' =>4, 
					'handler_id' =>6, 
					'booking_amount' => 2800,
					'paid_at' => "Offline", 
					'ticket_status' => 4,
					'created_at' => new DateTime,
                    'updated_at' => null,
                ],
				[
					'user_id' => 9, 
					'event_date' =>20/2/2018,
					'event_id' => 2, 
					'city_id' =>2, 
					'handler_id' =>8, 
					'booking_amount' => 3900,
					'paid_at' => "Online", 
					'ticket_status' => 3,
					'created_at' => new DateTime,
                    'updated_at' => null,
				]
            ];

            DB::table('ticket')->insert($dummy_values);
    }
}
