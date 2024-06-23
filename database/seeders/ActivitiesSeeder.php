<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\activities;

class ActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activities = [
            [
                'activity_name' => 'Alergare',
                'activity_description' => 'Alergare la un ritm moderat',
                'recomend_temp' => 15.5,
                'recomend_humidity' => 60.0,
                'recomend_wind_speed' => 5.0,
                'recomend_precipitation' => 0.0,
                'recomend_atmo_pressure' => 1015.0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'activity_name' => 'Ciclism',
                'activity_description' => 'Ciclism pe șosea',
                'recomend_temp' => 18.0,
                'recomend_humidity' => 50.0,
                'recomend_wind_speed' => 10.0,
                'recomend_precipitation' => 0.0,
                'recomend_atmo_pressure' => 1020.0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'activity_name' => 'Drumeție',
                'activity_description' => 'Drumeție în munți',
                'recomend_temp' => 12.0,
                'recomend_humidity' => 70.0,
                'recomend_wind_speed' => 15.0,
                'recomend_precipitation' => 0.0,
                'recomend_atmo_pressure' => 1005.0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'activity_name' => 'Înot',
                'activity_description' => 'Înot în piscină exterioară',
                'recomend_temp' => 25.0,
                'recomend_humidity' => 40.0,
                'recomend_wind_speed' => 5.0,
                'recomend_precipitation' => 0.0,
                'recomend_atmo_pressure' => 1010.0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'activity_name' => 'Yoga',
                'activity_description' => 'Yoga în parc',
                'recomend_temp' => 20.0,
                'recomend_humidity' => 55.0,
                'recomend_wind_speed' => 3.0,
                'recomend_precipitation' => 0.0,
                'recomend_atmo_pressure' => 1018.0,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        foreach ($activities as $activity) {
            activities::create($activity);
        }
    }
}
