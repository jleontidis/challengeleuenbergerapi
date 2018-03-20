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
        'email' => $faker->email,
    ];
});


$factory->define(App\Team::class, function (Faker\Generator $faker) {
    return [
        'team_name' => $faker->name,
        'logoUrl' => $faker->url,
        'noOfWins' => $faker->randomDigit,
        'noOfLoses' => $faker->randomDigit,
        'noOfDraws' => $faker->randomDigit,
        'noOfGoalsFor' => $faker->randomDigit,
        'noOfGoalsAgainst' => $faker->randomDigit,
        'noOfPoints' => $faker->randomDigit,
        
    ];
});

$factory->define(App\Match::class, function (Faker\Generator $faker) {
    
    $teams = App\Team::all();

    return [
        'team_home_id' => $faker->randomElement($teams->toArray())['id'],
        'team_away_id' => $faker->randomElement($teams->toArray())['id'],
        'match_time' => $faker->dateTime,
        'location' => $faker->city,
        'score_home' => $faker->randomDigit, 
        'score_away' => $faker->randomDigit
    ];
});