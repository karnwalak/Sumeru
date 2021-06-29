<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,100) as $list){
          DB::table('sellers') -> insert([
             "seller_name" => $faker -> name,
             "seller_contact" => $faker -> phoneNumber,
             "seller_address" => $faker -> address,
             "seller_email" => $faker -> email,
             "seller_status" => $faker -> boolean,
          ]);
        }
        // \App\Models\User::factory(10)->create();
    }
}
