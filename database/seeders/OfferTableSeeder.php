<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Offer;
use Illuminate\Database\Seeder;

class OfferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$faker = Factory::create();
        //dd($faker);

        for($i = 0; $i < 20; $i++) {

            Offer::factory()->create([
                
            ]);

        }

    }
}
