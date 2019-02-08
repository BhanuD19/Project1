<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    //
	use SoftDeletes;

        protected $fillable = [
             'name', 
        ];

}
