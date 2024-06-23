<?php

namespace Database\Seeders;

use App\Models\Disease;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiseasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $disease =[
            [
                'name_dis' => 'Migrena',
                'description_dis' => 'O durere de cap severă, adesea însoțită de greață și sensibilitate la lumină și sunet.',
            ],
            [
                'name_dis' => 'Astm',
                'description_dis' => 'O afecțiune cronică a căilor respiratorii care provoacă dificultăți în respirație din cauza inflamației și îngustării căilor respiratorii.',
            ],
            [
                'name_dis' => 'Cancer de piele',
                'description_dis' => 'O creștere anormală a celulelor pielii, adesea cauzată de expunerea excesivă la razele ultraviolete.',
            ],
            [
                'name_dis' => 'Rinite',
                'description_dis' => 'Inflamația mucoasei nazale, care poate fi alergică sau non-alergică, provocând simptome precum congestie nazală, strănut și secreții nazale.',
            ],
            [
                'name_dis' => 'Boli cardiovasculare',
                'description_dis' => 'Un grup de afecțiuni care afectează inima și vasele de sânge, incluzând boli coronariene, hipertensiune arterială și insuficiență cardiacă.',
            ],
        ];
        foreach ($disease as $each_disease) {
            Disease::create($each_disease);
        }
    }
}
