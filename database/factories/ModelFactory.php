<?php
use colocation\User;
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
$factory->define(colocation\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'nom' => $faker->lastName,
        'prenom' => $faker->firstNameMale ,
        'cin' => $faker->numberBetween($min = 11145821, $max = 99998521) ,
        'age' => $faker->numberBetween($min = 20, $max = 35) ,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('testtest'),
        'telephone' => $faker->numberBetween($min = 95111111, $max = 98999999) ,
        'adresse' => $faker->streetAddress,
        'ville' => $faker->cityPrefix ,
        'codepostal' => $faker->numberBetween($min = 1234, $max = 9999) ,
        'remember_token' => str_random(10),
    ];
});
