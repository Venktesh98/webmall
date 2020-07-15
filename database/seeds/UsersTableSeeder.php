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
                'name' => 'Admin',
                'email' => 'admin@webmall.com',
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
                'role_id' => 2,
                'name' => 'customer 1',
                'email' => 'customer1@webmall.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3.jtnHgx4l/MnAr1fs.AyuIve9pRMHlmkjs24fE81q/7DMilpNMbi',
                'remember_token' => 'pjAd74vW58YPRhuKbTfulK1bCRXzCUrv4nDm1lnGPE2YCoQ3FcW4Rx7wu7y4',
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-07-06 03:52:36',
                'updated_at' => '2020-07-08 05:50:21',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 2,
                'name' => 'customer 2',
                'email' => 'customer2@webmall.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3.jtnHgx4l/MnAr1fs.AyuIve9pRMHlmkjs24fE81q/7DMilpNMbi',
                'remember_token' => 'pjAd74vW58YPRhuKbTfulK1bCRXzCUrv4nDm1lnGPE2YCoQ3FcW4Rx7wu7y4',
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-07-06 03:52:36',
                'updated_at' => '2020-07-08 05:50:21',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 3,
                'name' => 'Seller 1',
                'email' => 'seller1@webmall.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$N45Hje.coC.yje3YZN0kTOU9UOEPN.mNy/q7ThO2RsSZB5ps79VCy',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-07-07 12:36:24',
                'updated_at' => '2020-07-07 12:37:46',
            ),
            4 =>
            array (
                'id' => 5,
                'role_id' => 3,
                'name' => 'Seller 2',
                'email' => 'seller2@webmall.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xJacK/k89sSDbvDvqaMnC.KLEHOZr/YhqQMVSrvrTVhjggQgVhzpq',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-11 00:16:34',
                'updated_at' => '2020-02-11 00:16:34',
            ),
        ));
    }
}