<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    //
	use SoftDeletes;

        protected $fillable = [
            'user_id', 'event_date', 'event_id', 'city_id', 'handler_id', 'booking_amount', 'paid_at', 'ticket_status', 
        ];

		public function user_id() {
			return $this->hasOne(user::class, 'user_id' , 'id'); 
		}
		public function handler_id() {
			return $this->hasOne(user::class, 'user_id' , 'id'); 
		}
		public function event_id() {
			return $this->hasOne(event::class, 'event_id' , 'id'); 
		}
		public function city_id() {
			return $this->hasOne(city::class, 'city_id' , 'id'); 
		}
		public function ticket_status() {
			return $this->hasOne(type_status::class, 'ticket_status' , 'id'); 
		}
}
