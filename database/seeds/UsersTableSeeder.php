<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'vgs',
                'email' => 'test@testing.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$aCoKffD4Yc27XUepulZ1zeWzrNaV2G2zVXt7YZSgIJMVzq90YkXyK',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-07-03 05:21:20',
                'updated_at' => '2020-07-06 03:43:14',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3.jtnHgx4l/MnAr1fs.AyuIve9pRMHlmkjs24fE81q/7DMilpNMbi',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-07-06 03:52:36',
                'updated_at' => '2020-07-06 03:54:45',
            ),
        ));
        
        
    }
}