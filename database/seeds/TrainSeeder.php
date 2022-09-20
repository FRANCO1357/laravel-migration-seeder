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
        $new_train->company = 'Trenitalia';
        $new_train->start_station = 'Milano';
        $new_train->end_station = 'Roma';
        $new_train->start_time = '2020/05/20';
        $new_train->end_time = '2020/05/21';
        $new_train->train_code = 3745;
        $new_train->carriages_number = 25;
        $new_train->in_time = true;
        $new_train->delay = false;

        $new_train->save();
    }
}
