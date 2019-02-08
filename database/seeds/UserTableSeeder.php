<?php

use Illuminate\Database\Seeder;
use project1\user
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		 $user = new User;
         $user->name = "Admin";
         $user->email = "admin@devtest.com";
         $user->password = bcrypt('admin');
         $user->is_admin = true;
         $user->save();
    }
}
