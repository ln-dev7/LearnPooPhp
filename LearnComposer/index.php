<?php

require_once './vendor/autoload.php';

$faker = Faker\Factory::create();

echo $faker->name . "\n";
echo $faker->email . "\n";