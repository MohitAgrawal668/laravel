<?php

namespace Database\Seeders;

use App\Models\Customers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = new Customers();
        $customer->name = 'Mohit';
        $customer->email = 'agrawalm668@gmail.com';
        $customer->mobile = '9084804762';
        $customer->password = md5('123456');
        $customer->address = 'Mathura';
        $customer->dob = now();
        $customer->gender = "M";
        $customer->save();
    }
}
