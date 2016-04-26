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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Company::class, function (Faker\Generator $faker) {
    return [
        'comp_name' => $faker->company ,
        'comp_other' => $faker->catchPhrase
    ];
});

$factory->define(App\Profile::class, function (Faker\Generator $faker) {
    return [
        'prof_name' => $faker->name ,
        'prof_salary' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'prof_grade' => $faker->numberBetween($min = 1, $max = 5),
        'comp_id' => $faker->numberBetween($min = 1, $max = 5),
        'pos_id' => $faker->numberBetween($min = 1, $max = 5)
    ];
});

$factory->define(App\Position::class, function (Faker\Generator $faker) {
    return [
        'pos_name' => $faker->catchPhrase
    ];
});
