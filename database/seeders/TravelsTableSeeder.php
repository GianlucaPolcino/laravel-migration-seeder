<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Travel;
class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 100; $i++){
            $new_travel = new Travel();
            $new_travel->city = $faker->city();
            $new_travel->state = $faker->state();
            $new_travel->hotel_name = $faker->company();
            $new_travel->rooms = $faker->numberBetween(1,10);
            $new_travel->stars = $faker->numberBetween(1,5);
            $new_travel->description = $faker->text(200);
            $new_travel->price = $faker->numberBetween(100, 10000);
            $new_travel->save();
        }
    }
}
