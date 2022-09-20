<?php

use App\Train;

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $new_train = new Train();
        $new_train->company = $faker->company();
        $new_train->start_station = $faker->city();
        $new_train->end_station = $faker->city();
        $new_train->start_time = $faker->date('Y-m-d H:i');
        $new_train->end_time = $faker->date('Y-m-d H:i');
        $new_train->train_code = $faker->numberBetween(1000, 4000);
        $new_train->carriages_number = $faker->numberBetween(0, 40);
        $new_train->in_time = $faker->boolean();
        $new_train->delay = $faker->boolean();

        $new_train->save();
    }
}
