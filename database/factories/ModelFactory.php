<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\App\Models\Commodity::class,function(Faker\Generator $faker) {
    return [
        'name' => implode(' ',$faker->words(rand(1,3))),
        'description' => implode('. ',$faker->sentences(rand(1,3))),
        'mass' => $faker->randomNumber()
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\App\Models\Shop::class,function(Faker\Generator $faker) {
    return [
        'name' => implode(' ',$faker->words(rand(1,3))),
        'location_id' => \App\Models\Location::inRandomOrder()->whereHas('celestial_type',function(\Illuminate\Database\Eloquent\Builder $query) {
            $query->whereNotIn('name',['Jump Point','Star','Asteriod Belt']);
        })->first()->id,
        'allegiance_id' => \App\Models\Allegiance::inRandomOrder()->first(['id'])->id,
        'affiliation_id' => \App\Models\Affiliation::inRandomOrder()->first(['id'])->id
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\App\Models\Bid::class,function(Faker\Generator $faker) {
    return [
        'commodity_id' => \App\Models\Commodity::inRandomOrder()->first()->id,
        'shop_id' => \App\Models\Shop::inRandomOrder()->first()->id,
        'reported_by' => \App\Models\User::inRandomOrder()->first()->id,
        'price' => $faker->randomFloat(2,0,1000),
        'quantity' => $faker->randomNumber()
    ];
});