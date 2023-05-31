<?php

namespace Database\Seeders;

use App\Models\Customers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0;$i<100;$i++) {
            $customer = new Customers();
            $customer->name = $faker->name;
            $customer->email = $faker->email;
            $customer->mobile = $faker->phoneNumber;
            $customer->password = $faker->password;
            $customer->address = $faker->address;
            $customer->dob = $faker->date;
            $customer->gender = "M";
            $customer->save();
        }
    }
}
