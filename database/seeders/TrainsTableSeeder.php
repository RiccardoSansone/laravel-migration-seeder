<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $trains = [
            [
                'company' => 'TrenItalia',
                'station_start' => 'Palermo Centrale',
                'station_end' => 'Catanzaro Centrale',
                'times_start' => '18.30',
                'times_end' => '12.45',
                'train_code' => 'TTRG234IT',
                'vagon_number' => 'VG01445',
                'is_in_time' => true,
                'cancelled' => false,
            ],
            [
                'company' => 'TrenItalia',
                'station_start' => 'Roma Termini',
                'station_end' => 'Palermo Centrale',
                'times_start' => '15.30',
                'times_end' => '22.45',
                'train_code' => 'TTRG1234IT',
                'vagon_number' => 'VG15004',
                'is_in_time' => true,
                'cancelled' => false,
            ]
        ];

        foreach ($trains as $train){
            $newTrain = new $train();
            $newTrain->company = $train['company'];
            $newTrain->station_start = $train['station_start'];
            $newTrain->station_end = $train['station_end'];
            $newTrain->times_start = $train['times_start'];
            $newTrain->times_end = $train['times_end'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->vagon_number = $train['vagon_number'];
            $newTrain->is_in_time = $train['is_in_time'];
            $newTrain->cancelled = $train['cancelled'];
            $newTrain->save();
        }
    }
}
