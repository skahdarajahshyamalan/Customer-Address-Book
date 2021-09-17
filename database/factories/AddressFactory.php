<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Address;
use Faker\Generator as Faker;
use App\Model\Customer;
$factory->define(Address::class, function (Faker $faker) {
    return [
        //
        'customer_id' =>function(){
        	return Customer::all()->random();
        },
        'adressname' =>$faker->address
    ];
});
