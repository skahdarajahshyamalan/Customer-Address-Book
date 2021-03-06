<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Model\Customer::class,3)->create();
        factory(App\Model\Contact::class,3)->create();
        factory(App\Model\Address::class,3)->create();
    }
}
