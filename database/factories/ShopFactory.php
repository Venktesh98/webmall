<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shop;
use Faker\Generator as Faker;

$factory->define(Shop::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence(2),
        'description'=>$faker->sentence(20),
        'is_active'=> true
    ];
    // After this it will go to the ProductSeeder file and from there will go to the migration.
});
