<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Topic::class, function (Faker $faker) {

    $userIds = \App\Models\User::all()->pluck('id')->toArray();
    $categoryIds = \App\Models\User::all()->pluck('id')->toArray();
    $updated_at = $faker->dateTimeThisMonth();
    $created_at = $faker->dateTimeThisMonth($updated_at);

    return [
        'title' => $faker->sentence(),
        'body' => $faker->text(),
        'user_id' => $faker->randomElement($userIds),
        'category_id' => $faker->randomElement($categoryIds),
        'excerpt' => $faker->sentence(),
        'created_at' => $created_at,
        'updated_at' => $updated_at,
    ];
});
