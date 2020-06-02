<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AppmodeleFilm;
use Faker\Generator as Faker;

$factory->define(App\modele\Film::class, function (Faker $faker) {
    return [
        'titre' => $faker->sentence(3, true),
        'anneeSortie' => $faker->year(),
        'description' => $faker->sentence(15, true),
        'idCategorie' => $faker->numberBetween(1, 10),
    ];
});
