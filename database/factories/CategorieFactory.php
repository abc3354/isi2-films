<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AppmodeleCategorie;
use Faker\Generator as Faker;

$factory->define(App\modele\Categorie::class, function (Faker $faker) {
    return [
        'libelle' => $faker->sentence(1, false),
    ];
});
