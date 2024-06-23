<?php

namespace Database\Seeders;

use App\Models\Disease;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\user_health_conditions;


class UserHeathCondSeeker extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $users= User::all();
        $diseases=Disease::all();
        if ($users->isEmpty() || $diseases->isEmpty()) {
            return;
        }
       
        $diseaseIndex = 0;
        foreach ($users as $user) {
            // Obține boala pentru indexul curent, ciclând dacă sunt mai mulți utilizatori decât boli
            $disease = $diseases[$diseaseIndex % $diseases->count()];

            // Crează înregistrarea în user_health_cond
            user_health_conditions::create([
        
                'user_id' => $user->id,
                'condition_disease_id' => $disease->id_disease,
                'created_at' => now(),
            'updated_at' => now()
            ]);

            // Treci la următorul index de boală
            $diseaseIndex++;
        }
    }
}
