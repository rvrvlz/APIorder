<?php

namespace APIorder;

require 'vendor/autoload.php';
include_once 'orders.php';

$orders = new order();

$faker = Faker\Factory::create();

$input = array();

for($i=0;$i<1000;$i++){

    $input[$i]['date'] = $faker->dateTimeBetween->format('Y-m-d');
    $input[$i]['company'] = $faker->company;
    $input[$i]['qty'] = $faker->numberBetween($min = 1000, $max = 100000);

    $res = $orders->insert($input[$i]);

}

?>
<a href="apiOrders.php">Api Orders</a>