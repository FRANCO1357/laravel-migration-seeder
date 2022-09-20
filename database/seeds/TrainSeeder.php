<?php

use App\Train;

use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_train = new Train();
        $new_train->company = 'Italo';
        $new_train->start_station = 'Bologna';
        $new_train->end_station = 'Parma';
        $new_train->start_time = '2020/07/20';
        $new_train->end_time = '2020/08/21';
        $new_train->train_code = 2673;
        $new_train->carriages_number = 21;
        $new_train->in_time = false;
        $new_train->delay = true;

        $new_train->save();
    }
}
