<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Model\Contact;
use App\Model\Customer;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        //
        'customer_id' =>function(){
        	return Customer::all()->random();
        },
        'telephone' =>$faker->numerify('#########')
    ];
});
