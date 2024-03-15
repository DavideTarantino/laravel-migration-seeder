<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
                $trains = new Train();

                $trains->company = $faker->company;
                $trains->departure_station = $faker->city;
                $trains->arrival_station = $faker->city;
                $trains->departure_time = $faker->time($format = 'H:i:s', $max = 'now');
                $trains->arrival_time = $faker->time($format = 'H:i:s', $max = 'now');
                $trains->train_code = $faker->unique()->ean8;
                $trains->coach_count = $faker->numberBetween($min = 1, $max = 10);
                $trains->on_time = $faker->boolean;
                $trains->cancelled = $faker->boolean;
            
                $trains->save();
        }
    }
}
