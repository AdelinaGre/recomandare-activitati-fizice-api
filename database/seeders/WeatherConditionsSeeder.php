<?php

namespace Database\Seeders;

use App\Models\weather_conditions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeatherConditionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $weatherConditions = [
            [
                'name_weather' => 'Presiune atmosferică (mm Hg)',
                'description_weather' => 'Schimbările bruște de presiune atmosferică pot declanșa migrene sau dureri de cap la persoanele sensibile.  Cand valorile acesteia nu sint in limite normale, persoanele cu hipertensiune arteriala au dureri de cap, palpitatii, senzatie de greutate in piept.Presiunea atmosferica scazuta duce la tahicardie si la cresterea tensiunii.',
                'normal_coefficient' =>760 ,
                'high_coefficient' => 776,
                'low_coefficient' => 746,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_weather' => 'Temperatura aerului (C)',
                'description_weather' => 'Temperaturile extreme, fie că sunt foarte ridicate sau foarte scăzute, pot pune o presiune suplimentară asupra sistemului cardiovascular. De exemplu, temperaturile ridicate pot duce la deshidratare și suprasolicitare a inimii, în timp ce temperaturile foarte scăzute pot crește riscul de spasme vasculare și infarct.',
                'normal_coefficient' =>25 ,
                'high_coefficient' =>33,
                'low_coefficient' => -30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_weather' => 'Radiații ultraviolete (nanometri',
                'description_weather' => 'Expunerea excesivă la radiațiile ultraviolete (UV) din soare poate crește riscul de cancer de piele. În special expunerea prelungită la soare în timpul verii sau în zone cu o gaură în stratul de ozon poate fi periculoasă.',
                'normal_coefficient' => 315,
                'high_coefficient' =>280,
                'low_coefficient' => 400,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_weather' => 'Viteza vântului (m/s',
                'description_weather' => 'Vitezele mari ale vântului pot provoca impacturi asupra structurilor și pot fi periculoase pentru activitățile exterioare.',
                'normal_coefficient' => 20,
                'high_coefficient' => 60,
                'low_coefficient' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_weather' => 'Umiditatea aerului (%)',
                'description_weather' => 'Umiditatea ridicată poate favoriza dezvoltarea mucegaiului și a altor alergeni care pot agrava astmul sau alte afecțiuni respiratorii.',
                'normal_coefficient' => 30,
                'high_coefficient' => 50,
                'low_coefficient' => 0.8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        foreach ($weatherConditions as $weatherCondition) {
            weather_conditions::create($weatherCondition);
        }
    }
}
